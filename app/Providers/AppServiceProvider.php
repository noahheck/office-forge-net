<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Outputs a meta tag with the provided name and content value - these tags are read in by the js meta service
         * to provide an easy interface to additional document details - json encodes and specifies json format for
         * arrays/objects (handled appropriately by js service)
         *
         * Usage:
         *
         *    @meta('number-of-tries', 5)
         *    @meta('office-id', $office->id)
         *    @meta('message', $message)
         */
        \Blade::directive('meta', function($expression) {
            return '<?php
                        $isJson = "0";
                        list ($name, $value) = [' . $expression . '];
                        if (is_array($value) || is_object($value)) {
                            $value = json_encode($value, JSON_HEX_APOS);
                            $isJson = "1";
                        } else {
                            $value = e($value);
                        }
                        echo "<meta data-json=\"$isJson\" name=\"" . e($name) . "\" content=\'" . $value . "\'>";
                    ?>';
        });

        /**
         * Outputs a Bootstrap error message container with the errors for the provided keys
         * The complex methods for passing in fields allows for providing values of possibly unknown types, e.g. named
         * variables containing arrays or strings, etc.
         *
         * Usage:
         *
         *    @errors('name')
         *    @errors('name', 'email')
         *    @errors(['name', 'email'])
         *    @errors(['name'], 'email')
         */
        \Blade::directive('errors', function($expression) {
            return '<?php
                $_fields = collect([' . $expression . '])->flatten()->toArray();
                if ($errors->hasAny($_fields)) {
                $_errorMessages = [];
                foreach ($_fields as $_field) {
                    if ($errors->has($_field)) {
                        $_errorMessages[] = e($errors->first($_field));
                    }
                }
                echo "<div class=\"alert alert-danger\">";
                echo implode("<br>", $_errorMessages);
                echo "</div>";
            }?>';
        });

        \Blade::include('form/text',           'textField');
        \Blade::include('form/date',           'dateField');
        \Blade::include('form/textarea',       'textareaField');
        \Blade::include('form/checkboxSwitch', 'checkboxSwitchField');
        \Blade::include('form/text-editor',    'textEditorField');
    }
}
