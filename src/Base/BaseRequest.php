<?php
namespace D3CR33\Auth\Base\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

/**
 * Class BaseRequest
 * @package D3CR33\Auth\Base\Controllers
 */
class BaseRequest extends FormRequest
{
    /**
     * customize return message
     * @param  Validator  $validator
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json($this->responseMessage($this->responseValidator($errors)) , JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }

}