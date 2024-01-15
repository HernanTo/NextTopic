@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('css/components.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css">
@endsection
@section('content')
<div class="contiain-froala" id="contiain-froala">

</div>
@endsection
@section('scripts')
    <script src="{{asset('js/menu.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/plugins/font_size.min.js"></script>
    <script>
        var editor = new FroalaEditor('#contiain-froala', {
            fontFamily:{
                "Hedvig Letters Serif": 'Hedvig Letters Serif',
                "Poppins" : 'Poppins',
                "Nunito Sans" : 'Nunito Sans',
            },
            toolbarInline: true,
            charCounterCount: false,
            toolbarVisibleWithoutSelection: true,
            toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'fontFamily', 'fontSize', '|', 'paragraphStyle', 'paragraphFormat', 'align', 'undo', 'redo', 'html'],
            fontSizeDefaultSelection: 16,
            fontSize: ['16','17','18','19','20','21','22','23','24','25','26'],
        });
    </script>
@endsection
