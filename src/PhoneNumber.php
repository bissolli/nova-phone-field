<?php

namespace Bissolli\NovaPhoneField;

use Illuminate\Support\Arr;
use Laravel\Nova\Fields\Field;

class PhoneNumber extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-phone-field';

    /**
     * Set custom formats, use # to represent [0,9].
     *
     * @param mixed ...$customFormats
     * @return PhoneNumber
     */
    public function withCustomFormats(...$customFormats)
    {
        return $this->withMeta([
            'customFormats' => Arr::flatten($customFormats),
        ]);
    }

    /**
     * Tells VueJS to load only masks from the given countries.
     *
     * @param mixed ...$countries
     * @return PhoneNumber
     */
    public function onlyCountries(...$countries)
    {
        return $this->withMeta([
            'onlyCountries' => Arr::flatten($countries),
        ]);
    }

    /**
     * Tells VueJS to load only the custom masks.
     *
     * @return PhoneNumber
     */
    public function onlyCustomFormats()
    {
        return $this->withMeta([
            'onlyCustomFormats' => true,
        ]);
    }
}
