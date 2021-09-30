@extends ('layouts.b4template')

@section ('content')
<!-- view/insertvenue.blade.php -->
<h2>Insert Record Venue (Template base)</h2>
    <form action="" method="post">
        Name venue 
        <input type="text" name="venue" class="form-control">
        Building/block 
        <select name="block" class="form-control">
            <option value="IT">IT Block</option>
            <option value="ACA">Academic Block</option>
            <option value="ADM">Administration Block</option>
        </select>
        Type 
        <input type="text" class="form-control">
        <button type="submit" class="btn btn-primary">Save venue</button>
    </form>

@endsection