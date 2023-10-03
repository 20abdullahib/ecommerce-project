<?php
$content = 'index';
include('layout/layout.php');
?>

<div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4 mb-[3em]">
    <div class="shrink-0">
        <img class="h-12 w-12" src="/img/logo.svg" alt="ChitChat Logo" />
    </div>
    <div>
        <div class="text-xl font-medium text-primary">ChitChat</div>
        <p class="text-slate-500">You have a new message!</p>
    </div>
</div>
<div class="alert alert-primary" role="alert">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</div>