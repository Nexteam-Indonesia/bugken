<?php


namespace App\Http\Controllers;


use App\Http\Requests\ExceptionRequest;
use App\Models\Exception;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use function MongoDB\BSON\toJSON;

class ExceptionController extends Controller
{

    public function store(ExceptionRequest  $request) : JsonResponse
    {
        // TODO : Make validation of project key
        $key = $request->header('key');

        if ($key == null || $key == '') {
            return response()->json([
                'message' => 'please attach the project key in header'
            ], 422);
        }

        $project = Project::where('key', $key)->first();
        if (empty($project)) {
            return response()->json([
                'message' => 'Project Key not found'
            ], 422);
        }

        try {
            $except = new Exception();
            $except->id = Str::uuid();
            $except->project_id = $project->id;
            $except->title = $request->get('title');
            $except->log = json_encode($request->get('log'));
            $except->save();

            return response()->json([
                'message' => 'success reporting a log'
            ], 200);
        } catch (\Throwable $throwable) {
            return response()->json([
                'message' => $throwable->getMessage(),
            ], 500);
        }
    }

    public function getLogByProjectKey($projectKey) : JsonResponse
    {
        return response()->json([]);
    }

}
