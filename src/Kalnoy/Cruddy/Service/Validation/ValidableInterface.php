<?php

namespace Kalnoy\Cruddy\Service\Validation;

interface ValidableInterface {

    /**
     * Create action.
     */
    const CREATE = 'create';

    /**
     * Update action.   
     */
    const UPDATE = 'update';

    /**
     * Validate an input for specific action which is either `create` or `update`.
     *
     * @param string $action
     * @param array  $input
     *
     * @return bool
     */
    public function validFor($action, array $input);

    /**
     * Get validation errors.
     *
     * @return array
     */
    public function errors();
}