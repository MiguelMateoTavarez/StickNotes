 @extends('layouts.app')

 @section('title', 'Listado de notas')

 @section('content')
 <div class="container">
   <div class="row row-cols-1 row-cols-md-2 g-4">
     @forelse($notes as $note)
     <div class="col">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title">{{ $note->id }}) {{ $note->title }}</h5>
           <div class="row">
             <a href="{{ route('edit', $note->id) }}"><i class="fas fa-pen" id="fa-pen-edit"></i></a>
             <a href="{{ route('destroy', $note->id) }}"><i class="fas fa-trash-alt"></i></a>
           </div>
         </div>
        </div>
      </div>
     @empty
     <p>No hay notas disponibles, caramba</p>
     @endforelse
   </div>
 </div>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

 <!-- Option 2: Separate Popper and Bootstrap JS -->
 <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>-->
 @endsection