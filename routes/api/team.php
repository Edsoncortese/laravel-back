<?php

Route::group(['prefix' => 'teams', 'namespace' => "Team", 'middleware' => ["auth:api"]], function () {
    Route::post('/', ['as' => "create-team", 'uses' => "CreateTeam"]);
    Route::get('/', ['as' => "list-teams", 'uses' => "ListTeams"]);
    Route::get('/{slug}', ['as' => "show-team", 'uses' => "ShowTeam"]);
    Route::patch('/{slug}', ['as' => "update-team", 'uses' => "UpdateTeam"]);
    Route::delete('/{slug}', ['as' => "delete-team", 'uses' => "DeleteTeam"]);

    Route::group(['prefix' => '/{slug}/members'], function () {
        Route::get('/', ['as' => "list-team-members", 'uses' => "ListTeamMembers"]);
        Route::post('/', ['as' => "add-team-member", 'uses' => "AddTeamMember"]);
        Route::get('/{id}', ['as' => "show-team-member", 'uses' => "ShowTeamMember"]);
        Route::delete('/{id}', ['as' => "remove-team-member", 'uses' => "RemoveTeamMember"]);
    });
});
