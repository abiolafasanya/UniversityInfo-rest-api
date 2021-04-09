@extends('layouts.app')

@section('myview1')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <h1>University Information Api</h1>

                   <form action="" method="post">
                       <div class="form-group">
                           <label for="Institution">Institution</label>
                           <input type="text" name="institution_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="discription">Description</label>
                            <input type="text" name="description" class="form-control">
                       </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

    


