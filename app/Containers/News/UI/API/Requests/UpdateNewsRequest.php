<?php

namespace App\Containers\News\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class UpdateNewsRequest.
 */
class UpdateNewsRequest extends Request
{

    /**
     * The assigned Transporter for this Request
     *
     * @var string
     */
    // protected $transporter = \App\Ship\Transporters\DataTransporter::class;

    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
        // 'id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
          'name' => 'required|max:255',
          'description' => 'required',
          'image' => 'numeric',
          'files' => 'json',
          'tags' => 'json',
          'rubric' => 'numeric',
          'isBanComment' => 'boolean',
          'hasDatePublish' => 'boolean',
          'datePublish' => 'json',
          'membersBlock' => 'json',
          'hasAccess' => 'json',
          'status' => 'numeric'
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
