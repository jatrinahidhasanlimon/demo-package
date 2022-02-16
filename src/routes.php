<?php
    Route::get('demo-package', function(){
    echo 'Hello from the demo package!';
});
    Route::get('check-view', function(){
        return view('demo::demo');
});