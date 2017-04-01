<?php

namespace Modules\Core\Models;

use Modules\Core\Traits\LinkableTrait;
use File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class BaseModel extends Model
{
    use LinkableTrait;

    protected $identifiableName = 'name';

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Fire up the linkableTrait so it can do its thing.
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        self::linkableConstructor();
    }

    /**
     * Gives the model a identifiable name for links and such.
     *
     * @return string
     */
    public function identifiableName()
    {
        return $this->{$this->identifiableName};
    }

    /**
     * Fill attributes in $this from Input.
     *
     * @return Model
     */
    public function hydrateFromInput(array $input = [])
    {
        if (!isset($this->fillable)) {
            return $this->fill(Request::all());
        }

        if (empty($input)) {
            $input = Request::only($this->fillable);
        } else {
            $input = array_only($input, $this->fillable);
        }

        $input = array_filter($input, 'strlen');

        return $this->fill($input);
    }

    /**
     * Beatswitch\Lock Methods.
     */
    public function getCallerType()
    {
        list(, , $module, , $model) = explode('\\', __CLASS__);

        return sprintf('%s_%s', $module, $model);
    }

    public function getCallerId()
    {
        return $this->id;
    }

    public function getCallerRoles()
    {
        return [];
    }

    public function transform()
    {
        return $this->toArray();
    }



    public function setAttribute($property, $value)
    {
        require_once base_path('vendor'.DIRECTORY_SEPARATOR.'htmlpurifier'.DIRECTORY_SEPARATOR.'library'.DIRECTORY_SEPARATOR.'HTMLPurifier.auto.php');
        $path = base_path('vendor'.DIRECTORY_SEPARATOR.'htmlpurifier'.DIRECTORY_SEPARATOR.'library'.DIRECTORY_SEPARATOR.'HTMLPurifier'.DIRECTORY_SEPARATOR.'DefinitionCache'.DIRECTORY_SEPARATOR.'Serializer');
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $config = \HTMLPurifier_Config::createDefault();
        $config->set('HTML.Trusted', true);
        $config->set('Filter.YouTube', true);
        $purifier = new \HTMLPurifier($config);
        if ($value != strip_tags($value)) {
            $value = $purifier->purify($value);
        }
        parent::setAttribute($property, $value);
    }


}
