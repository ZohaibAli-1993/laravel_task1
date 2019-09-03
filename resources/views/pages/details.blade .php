@extends('layouts.main') 
@section('content') 
  
  
         <div class="column is-half is-offset-one-quarter"> 
                
                    <!--Total book list -->
                    <table    class="table is-striped is-bordered"> 
                        <!--table headings -->
                        <thead>
                            <tr>
                                <th>Bird Id</th>
                                <th>Name</th>
                                <th>Detail</th>
                             
                            </tr>
                        </thead>
                        <tbody> 
                            <!-- v-for to display all the books on the table -->
                            <tr> 
                               <?php foreach ($bird as $result ) : ?>
                                 <!-- publisher name link to display all the book related to specific publisher -->
                                <td > 
                                    {{$result->id}}
                                  
                                    
                                </td> 
                                <td > 
                                    {{$result->name}}
                                  
                                    
                                </td> 
                               
                               
                            </tr> 
                        <?php endforeach;?>
                        </tbody>
                    </table > 
                
</div> 

@endsection