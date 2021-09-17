<?php

return [

    /*
    |--------------------------------------------------------------------------
    | validoation Language Lines
    |--------------------------------------------------------------------------
    |
    | El following language lines contain El default erro messages used by
    | El validoato class. Some of Else rules tener multiple versions such
    | as El size rules. Feel free to tweak each of Else messages here.
    |
    */

    'accepted' => 'El :attribute debe ser aceptado.',
    'accepted_if' => 'El :attribute debe aceptarse cuyo :other es :value.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha posterio un :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterio o igual un :date.',
    'alpha' => 'El :attribute solo debe contener letras.',
    'alpha_dash' => 'El :attribute solo debe contener letras, numeros, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute solo debe contener letras y numeros.',
    'array' => 'El :attribute debe ser una matriz.',
    'before' => 'El :attribute debe ser una fecha anterio un :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterio o igual un :date.',
    'entre' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string' => 'El :attribute debe estar entre :min y :max characters.',
        'array' => 'El :attribute debe tener entre :min y :max elementos.',
    ],
    'boolean' => 'El :attribute campo debe ser true o false.',
    'confirmed' => 'El :attribute confirmacion no coinciden.',
    'current_password' => 'El password es incorrecto.',
    'date' => 'El :attribute no es una fecha validoa.',
    'date_equals' => 'El :attribute debe ser una fecha igual un :date.',
    'date_format' => 'El :attribute no conincide con el formato :format.',
    'different' => 'El :attribute y :other deben ser diferentes.',
    'digits' => 'El :attribute debe ser :digits digits.',
    'digits_between' => 'El :attribute debe estar entre :min y :max digits.',
    'dimensions' => 'El :attribute tiene dimenciones de imagenn no validoas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => 'El :attribute debe ser una diceccion de correo validoa.',
    'ends_with' => 'El :attribute debe terminar con uno de los siguientes valores: :values.',
    'exists' => 'El :attribute seleccionado es invalidoo.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El :attribute debe ser mayor que :value.',
        'file' => 'El :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor que :value characters.',
        'array' => 'El :attribute debe tener mas de :value elementos.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser mayor que o igual :value.',
        'file' => 'El :attribute debe ser mayor que o igual :value kilobytes.',
        'string' => 'El :attribute debe ser mayor que o igual :value characters.',
        'array' => 'El :attribute debe tener :value elementos o mas.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El :attribute seleccionado es invalido.',
    'in_array' => 'El :attribute campo no existe en :other.',
    'integer' => 'El :attribute debe ser un entero.',
    'ip' => 'El :attribute debe ser una valido IP address.',
    'ipv4' => 'El :attribute debe ser una valido IPv4 address.',
    'ipv6' => 'El :attribute debe ser una valido IPv6 address.',
    'json' => 'El :attribute debe ser una valido JSON string.',
    'lt' => [
        'numeric' => 'El :attribute debe ser menor que :value.',
        'file' => 'El :attribute debe ser menor que :value kilobytes.',
        'string' => 'El :attribute debe ser menor que :value characters.',
        'array' => 'El :attribute debe tener menor que :value elementos.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser menor que o igual :value.',
        'file' => 'El :attribute debe ser menor que o igual :value kilobytes.',
        'string' => 'El :attribute debe ser menor que o igual :value characters.',
        'array' => 'El :attribute debe no tener mas que :value elementos.',
    ],
    'max' => [
        'numeric' => 'El :attribute debe no ser mayor que :max.',
        'file' => 'El :attribute debe no ser mayor que :max kilobytes.',
        'string' => 'El :attribute debe no ser mayor que :max characters.',
        'array' => 'El :attribute debe no tener mas que :max elementos.',
    ],
    'mimes' => 'El :attribute debe ser un file of type: :values.',
    'mimetypes' => 'El :attribute debe ser un file of type: :values.',
    'min' => [
        'numeric' => 'El :attribute debe ser at least :min.',
        'file' => 'El :attribute debe ser at least :min kilobytes.',
        'string' => 'El :attribute debe ser at least :min characters.',
        'array' => 'El :attribute debe tener at least :min elementos.',
    ],
    'multiple_of' => 'El :attribute debe ser un multiple of :value.',
    'no_in' => 'El seleccionado :attribute es invalido.',
    'no_regex' => 'El :attribute format es invalido.',
    'numeric' => 'El :attribute debe ser un number.',
    'password' => 'El password es incorrecto.',
    'present' => 'El :attribute campo debe ser present.',
    'regex' => 'El :attribute format es invalido.',
    'required' => 'El :attribute campo es requerido.',
    'required_if' => 'El :attribute campo es requerido when :other es :value.',
    'required_unmenor' => 'El :attribute campo es requerido unmenor :other es in :values.',
    'required_with' => 'El :attribute campo es requerido when :values es present.',
    'required_with_all' => 'El :attribute campo es requerido when :values are present.',
    'required_without' => 'El :attribute campo es requerido when :values es no present.',
    'required_without_all' => 'El :attribute campo es requerido when none of :values are present.',
    'prohibited' => 'El :attribute campo es prohibited.',
    'prohibited_if' => 'El :attribute campo es prohibited when :other es :value.',
    'prohibited_unmenor' => 'El :attribute campo es prohibited unmenor :other es in :values.',
    'same' => 'El :attribute y :other debe coinciden.',
    'size' => [
        'numeric' => 'El :attribute debe ser :size.',
        'file' => 'El :attribute debe ser :size kilobytes.',
        'string' => 'El :attribute debe ser :size characters.',
        'array' => 'El :attribute debe contain :size elementos.',
    ],
    'starts_with' => 'El :attribute debe start with one of El following: :values.',
    'string' => 'El :attribute debe ser un string.',
    'timezone' => 'El :attribute debe ser un valido timezone.',
    'unique' => 'El :attribute has already seren taken.',
    'uploaded' => 'El :attribute failed to upload.',
    'url' => 'El :attribute debe ser un valido URL.',
    'uuid' => 'El :attribute debe ser un valido UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom validoation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validoation messages fo attributes using El
    | convention "attribute.rule" to name El lines. This makes it quick to
    | specify un specific custom language line fo un given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom validoation Attributes
    |--------------------------------------------------------------------------
    |
    | El following language lines are used to swap our attribute placeholder
    | with something mas reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message mas expressive.
    |
    */

    'attributes' => [],

];
