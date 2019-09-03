@extends('layouts.main') 
@section('content') 
  
  <h1>List Of Birds</h1> 
   <div class="column is-half is-offset-one-quarter"> 
    
        <!--Total birds list -->
        <table    class="table is-striped is-bordered"> 
            <!--table headings -->
            <thead>
                <tr>
                    <th>Bird Id</th>
                    <th>Name</th> 
                    <th>Created At</th> 
                    <th>Updated At</th>
                    <th>Detail</th>
                 
                </tr>
            </thead>
            <tbody> 
                <!-- Loop to display all the birds  on the table -->
                <tr> 
                   <?php foreach ($page as $result ) : ?>
                     
                    <td > 
                        {{$result->id}}
                      
                        
                    </td>   
                    <!--name-->
                    <td > 
                        {{$result->name}}
                      
                        
                    </td>  
                    <!--created at  -->
                    <td > 
                        {{$result->created_at}}
                      
                        
                    </td> 
                    <!--Uppdated At -->
                    <td > 
                        {{$result->updated_at}}
                      
                        
                    </td> 
                    <!-- bird id send to open the the details through URL -->
                    <td> <a id="index"  href="{{url('/'.$result->id)}}">Detail</a>
                    </td>
                </tr> 
            <?php endforeach;?><!--// end foreach -->
            </tbody><!--// end body -->
        </table > <!--// end table-->
    
    </div> <!--// end first div -->

@endsection