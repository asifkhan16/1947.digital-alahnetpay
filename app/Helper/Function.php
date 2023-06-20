<?php 


function SuccessResponse($data)
{
    $response = [
        'success' => true,
        'error'   => null,
        'body'    => $data,
    ];

    return response()->json($response);
}

function ErrorResponse($error)
{
    $response = [
        'success' => false,
        'error' => $error,
        'body' => null,
    ];

    return response()->json($response);
}

function SuccessResponseWithOutJson($data)
{
    $response = [
        'success' => true,
        'error'   => null,
        'body'    => $data,
    ];

    return $response;
}

function ErrorResponseWithOutJson($error)
{
    $response = [
        'success' => false,
        'error' => $error,
        'body' => null,
    ];

    return $response;
}

function PercentToObtaind($percent,$total){
    $data['obtaind'] = ($total * $percent) / 100;

    return SuccessResponseWithOutJson($data);
}
