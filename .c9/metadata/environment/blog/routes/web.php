{"filter":false,"title":"web.php","tooltip":"/blog/routes/web.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":13,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});",""],"id":2}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":45},"action":"insert","lines":["Route::get('/posts', 'PostController@index');"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":45},"end":{"row":13,"column":45},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1647139071187,"hash":"af18064ed451b539a8c09b9d7ed5cd5286710ccf"}