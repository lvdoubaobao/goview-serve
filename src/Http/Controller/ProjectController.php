<?php

namespace Xczn\GoViewServe\Http\Controller;

use Illuminate\Http\Request;
use Xczn\GoViewServe\Models\GoViewProject;
use Xczn\GoViewServe\Request\ProjectCreateRequest;

class ProjectController
{
    public function list()
    {
        return response()->json([
            'code' => 200,
            'msg' => '请求成功',
            'data' => []
        ]);
    }

    public function create(ProjectCreateRequest $projectCreateRequest)
    {
        $projectName = $projectCreateRequest->input('projectName');
        $indexImage = $projectCreateRequest->input('indexImage');
        $remarks = $projectCreateRequest->input('remarks');
        $project = new GoViewProject();
        $project->project_name = $projectName;
        $project->project_image = $indexImage;
        $project->remarks = $remarks;
        $project->save();
        return response()->json([
           'code'=>200,
            'msg'=>'创建成功',
            'data'=>[
                'createTime'=>$project->created_at->toDateTimeString(),
                'createUserId'=>$project->created_user_id,
                'id'=>$project->id,
                'indexImage'=>$project->project_image ? \Storage::url($project->project_name) : '',
                'isDelete'=>$project->deleted_at ? 1 : -1,
                'projectName'=>$project->project_name,
                'remarks'=>$project->remarks,
                'state'=>$project->state
            ]
        ]);
    }
    public function getData(Request  $request){
        $projectId=$request->input('projectId');
        $project=GoViewProject::findOrFail($projectId);
        return response()->json([
            'code'=>200,
            'msg'=>'创建成功',
            'data'=>[
                'createTime'=>$project->created_at->toDateTimeString(),
                'createUserId'=>$project->created_user_id,
                'id'=>$project->id,
                'indexImage'=>$project->project_image ? \Storage::url($project->project_name) : '',
                'isDelete'=>$project->deleted_at ? 1 : -1,
                'projectName'=>$project->project_name,
                'remarks'=>$project->remarks,
                'state'=>$project->state,
                'content'=>$project->data
            ]
        ]);
    }
    public function saveData(Request  $request){
        $projectId=$request->input('projectId');
        $content=$request->input('content');
        $project=GoViewProject::findOrFail($projectId);
        $project->data=$content;
        $project->save();
        return response()->json([
            'code'=>200,
            'msg'=>'请求成功',
            'data'=>[
                'createTime'=>$project->created_at->toDateTimeString(),
                'createUserId'=>$project->created_user_id,
                'id'=>$project->id,
                'indexImage'=>$project->project_image ? \Storage::url($project->project_name) : '',
                'isDelete'=>$project->deleted_at ? 1 : -1,
                'projectName'=>$project->project_name,
                'remarks'=>$project->remarks,
                'state'=>$project->state,
            ]
        ]);
    }
    public function upload(Request  $request){
        dd($request->file('object'));
    }
}
