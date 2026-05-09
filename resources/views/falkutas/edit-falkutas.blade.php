<x-layout title="Edit-Falkutas">
    <h1>Edit Falkutas</h1>
    
      @if ($errors->all())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
      </ul>   
    </div>
    @endif

     <form action="/falkutas/{{ $falkutas->id }}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <input name="name_falkutas" 
        type="text"
        value="{{ $falkutas->name}}"  
        class="form-control" 
        placeholder="Nama Falkutas">
      </div>

         <div class="form-group">
        <input 
        name="name_dekan" 
        type="text" 
        value="{{ $falkutas->dekan }}"  
        class="form-control" 
        placeholder="Nama Dekan">
      </div>
      <button type="submit" class="btn btn-warning">
        Simpan
      </button>
    </form>
</x-layout>