@extends('layout.app')
@section('title', 'Subjects')

@section('content')

    <div class="books">
            <img style='height:100%; width: 100%; object-fit: contain' src="images/books.jpeg" >
        
    </div>

    <div class="selection">

        <form>
            <input class="input2" list="subjects" name="subjects" placeholder="select subject">
            <datalist id="subjects">
                <option value="maths">
                <option value="Firefox">
                <option value="Chrome">
                <option value="Opera">
                <option value="Safari">
            </datalist>
        


            <input class="input2" list="browsers" name="browser" placeholder="select grade">
            <datalist id="browsers">
                <option value="Internet Explorer">
                <option value="Firefox">
                <option value="Chrome">
                <option value="Opera">
                <option value="Safari">
            </datalist>

            <button class="btn4" type="submit"> Search Tutor</button>
        </form>
    </div>


     



    <style>

        .selection
        {
        margin-left:25%;
        margin-top:10%;
        margin-bottom: 10%;
      
        width:50%;
        height:150px;
       
        }

        .input2
        {
        background-color: rgba(0,0,0,0.01);
        margin-top:4%;
        margin-left:15px;
        transition: .7s;
        font-family: "bookman";
        font-size: 20px;
        color:white;
        border-top-color:rgba(0,0,0,0.01) ;
        border-right-color:rgba(0,0,0,0.01);
        border-left-color: rgba(0,0,0,0.01);
        border-bottom-color : #C0392B;
        }
        

        .btn4
        {

        background-color: rgba(0,0,0,0.01);
        font-family: "bookman";
        color: grey;
        font-size: 20px;
        border-top-color:rgba(0,0,0,0.01) ;
        border-right-color:rgba(0,0,0,0.01);
        border-left-color: rgba(0,0,0,0.01);
        border-bottom-color : rgba(0,0,0,0.01);
        }

        .btn4:hover 
        {
            color:  grey;
            border-color:white;
            background-color: transparent;
            transition: .7s;
            -moz-border-radius-topleft: 8px;
            -moz-border-radius-topright: 8px;
            -moz-border-radius-bottomright: 8px;
            -moz-border-radius-bottomleft: 8px;
            -webkit-border-radius: 8px 8px 8px 8px;
            border-radius: 8px 8px 8px 8px
         }
    </style>


@endsection