<?php

namespace Xczn\GoViewServe\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GoViewProject
 *
 * @property int $id
 * @property string|null $project_name
 * @property string|null $project_image
 * @property string|null $remarks
 * @property int|null $state 项目状态[-1未发布,1发布]
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $created_user_id 创建人
 * @property string|null $data 项目内容
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject query()
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject whereCreatedUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject whereProjectImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject whereProjectName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoViewProject whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GoViewProject extends Model
{
    use HasFactory;
    protected $table='go_view_project';


}
