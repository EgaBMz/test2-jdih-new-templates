<?php

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//Dokumen Hukum
Route::get('/dokumen/hukum', 'DokumenController@index')->name('dokumen.index');
Route::get('/dokumen/hukum/filter/{dokumen}', 'DokumenController@filter')->name('dokumen.filter');
Route::get('/dokumen/hukum/create', 'DokumenController@create')->name('dokumen.create');
Route::post('/dokumen/hukum', 'DokumenController@store')->name('dokumen.store');
Route::get('/dokumen/hukum/{dokumen}/edit', 'DokumenController@edit')->name('dokumen.edit');
Route::get('/dokumen/hukum/{dokumen}/detail', 'DokumenController@detail')->name('dokumen.detail');
Route::put('/dokumen/hukum/{dokumen}', 'DokumenController@update')->name('dokumen.update');
Route::put('/dokumen/hukum/{dokumen}/validasi', 'DokumenController@validasi')->name('dokumen.validasi');
Route::delete('/dokumen/hukum/{dokumen}', 'DokumenController@destroy')->name('dokumen.destroy');
// Route::post('/dokumen/filter', 'DokumenController@filter')->name('dokumen.filter');

//Master SKPD
Route::get('/master/skpd', 'SkpdController@index')->name('skpd.index');
Route::get('/master/skpd/create', 'SkpdController@create')->name('skpd.create');
Route::post('/master/skpd', 'SkpdController@store')->name('skpd.store');
Route::get('/master/skpd/{skpd}/edit', 'SkpdController@edit')->name('skpd.edit');
Route::put('/master/skpd/{skpd}', 'SkpdController@update')->name('skpd.update');

//Master Klasifikasi
Route::get('/master/klasifikasi', 'KlasifikasiController@index')->name('klasifikasi.index');
Route::get('/master/klasifikasi/create', 'KlasifikasiController@create')->name('klasifikasi.create');
Route::post('/master/klasifikasi', 'KlasifikasiController@store')->name('klasifikasi.store');
Route::get('/master/klasifikasi/{klasifikasi}/edit', 'KlasifikasiController@edit')->name('klasifikasi.edit');
Route::put('/master/klasifikasi/{klasifikasi}', 'KlasifikasiController@update')->name('klasifikasi.update');

//Master Propemperda
Route::get('/master/propemperda', 'PropemperdaController@index')->name('propemperda.index');
Route::get('/master/propemperda/create', 'PropemperdaController@create')->name('propemperda.create');
Route::post('/master/propemperda', 'PropemperdaController@store')->name('propemperda.store');
Route::get('/master/propemperda/{propemperda}/edit', 'PropemperdaController@edit')->name('propemperda.edit');
Route::put('/master/propemperda/{propemperda}', 'PropemperdaController@update')->name('propemperda.update');
Route::delete('/master/propemperda/{propemperda}', 'PropemperdaController@destroy')->name('propemperda.destroy');

//Master Bankumaskin
Route::get('/master/bankumaskin', 'BankumaskinController@index')->name('bankumaskin.index');
Route::get('/master/bankumaskin/create', 'BankumaskinController@create')->name('bankumaskin.create');
Route::post('/master/bankumaskin', 'BankumaskinController@store')->name('bankumaskin.store');
Route::get('/master/bankumaskin/{bankumaskin}/edit', 'BankumaskinController@edit')->name('bankumaskin.edit');
Route::put('/master/bankumaskin/{bankumaskin}', 'BankumaskinController@update')->name('bankumaskin.update');
Route::delete('/master/bankumaskin/{bankumaskin}', 'BankumaskinController@destroy')->name('bankumaskin.destroy');

//Master Pengaturan
Route::get('/master/pengaturan', 'PengaturanController@index')->name('pengaturan.index');
Route::get('/master/pengaturan/{pengaturan}/edit', 'PengaturanController@edit')->name('pengaturan.edit');
Route::put('/master/pengaturan/{pengaturan}', 'PengaturanController@update')->name('pengaturan.update');

//Master Peraturan
Route::get('/master/peraturan', 'PeraturanController@index')->name('peraturan.index');
Route::get('/master/peraturan/create', 'PeraturanController@create')->name('peraturan.create');
Route::post('/master/peraturan', 'PeraturanController@store')->name('peraturan.store');
Route::get('/master/peraturan/{peraturan}/edit', 'PeraturanController@edit')->name('peraturan.edit');
Route::put('/master/peraturan/{peraturan}', 'PeraturanController@update')->name('peraturan.update');

//Master Berita
Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/berita/create', 'BeritaController@create')->name('berita.create');
Route::post('/berita/post', 'BeritaController@store')->name('berita.store');
Route::get('/berita/{berita}/edit', 'BeritaController@edit')->name('berita.edit');
Route::put('/berita/{berita}', 'BeritaController@update')->name('berita.update');
Route::delete('/berita/{berita}', 'BeritaController@destroy')->name('berita.destroy');

//Master Log Survey Gender
Route::get('/survey/gender', 'SurveyGenderController@index')->name('survey.gender.index');

//File
Route::get('/file/{file}', 'FileController@show')->name('file.show');

//Profil / Ubah Password
Route::get('/profil', 'ProfilController@index')->name('profil.index');
Route::post('ubah_password', 'ProfilController@ubah_password')->name('profil.ubah_password');