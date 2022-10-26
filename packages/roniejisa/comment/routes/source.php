<?php
Route::post('danh-gia', 'CommentController@onlyRating');
Route::get('detail-comment', 'CommentAdminController@detailComment');
Route::post('tra-loi-binh-luan', 'CommentAdminController@repComment');
Route::get('fetch-comment/{id}', 'CommentAdminController@fetchComment');
Route::get('change-act/{id}', 'CommentAdminController@changeAct');
Route::match(['GET', 'POST'], 'danh-gia-san-pham', 'CommentController@ratingOrder');
Route::post('shop-tra-loi-binh-luan', 'CommentController@shopReplyComment');


Route::post('binh-luan', 'CommentController@commentNow')->name('comment.now');
Route::get('show-comment/{id}', 'CommentController@showComment')->name('comment.show');
Route::post('tra-loi-binh-luan', 'CommentController@repCommentNow')->name('comment.rep');
Route::post('binh-luan-be-khac', 'CommentController@fetchCommentChild')->name('comment.load.child');
Route::post('binh-luan-khac', 'CommentController@fetchCommentMore')->name('comment.load');
Route::post('loc-danh-gia', 'CommentController@filterRating')->name('comment.filter');
Route::post('thich-binh-luan', 'CommentController@likeAndUnlike')->name('comment.like');
