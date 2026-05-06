<x-layout>
    <h1>Edit Falkutas</h1>
    
     <form action="/falkutas{{ $falkutas->id }}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <input name="name_falkutas" type="text"value="{{ $falkutas->name }}"  class="form-control" placeholder="Nama Falkutas">
      </div>
         <div class="form-group">
        <input 
        name="name_dekan" type="text" value="{{ $falkutas->name }}"  class="form-control" placeholder="Nama Dekan">
      </div>
      <button type="submit" class="btn btn-warning">
        Simpan
      </button>
    </form>
</x-layout>