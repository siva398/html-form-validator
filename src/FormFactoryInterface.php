<?php

namespace Xtreamwayz\HTMLFormValidator;

use Zend\InputFilter\BaseInputFilter;

interface FormFactoryInterface
{
    /**
     * FormFactory constructor: Load html form and optionally set an InputFilter
     *
     * @param string               $htmlForm
     * @param array                $defaultValues
     * @param BaseInputFilter|null $inputFilter
     */
    public function __construct($htmlForm, array $defaultValues = [], BaseInputFilter $inputFilter = null);

    /**
     * Load html form and optionally set default data
     *
     * @param string $htmlForm
     * @param array  $defaultValues
     *
     * @return FormFactoryInterface
     */
    public static function fromHtml($htmlForm, array $defaultValues = []);

    /**
     * Validate the loaded form with the data
     *
     * @param array $data
     *
     * @return ValidationResult
     */
    public function validate(array $data);

    /**
     * Return form as a string. Optionally inject the error messages for the result.
     *
     * @param ValidationResult|null $result
     *
     * @return string
     */
    public function asString(ValidationResult $result = null);
}
