<!DOCTYPE html>
<html>
<head>
<title> Phonebooktica - Laravel and Vue CRUD Implementation </title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"> Phonebooktica </a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      {{-- <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul> --}}
</div><!--/.nav-collapse -->
</div>
</nav>

<div style="margin-top:70px;" class="container">
    <div id="app">

     <contacts :list="contacts"></contacts>

 </div>


</div><!-- /.container -->


<template id="contacts-template">


 <h1>My Contacts</h1><br/>
 <div class="row">

     <div class="col-md-4">

       <legend>Add New Contact</legend>

       <div class="form-group">
           <label for="">Contact name</label>
           <input v-model="newContact.name" type="text" class="form-control" id="" placeholder="Enter contact name">
       </div>

       <div class="form-group">
           <label for="">Contact number</label>
           <input  v-model="newContact.number"  type="text" class="form-control" id="" placeholder="Enter contact number">
       </div>
       <input v-model="newContact.id" type="hidden">
       <button @click="addNewContact()" v-if="!edit" type="submit" class="btn btn-primary">Add User</button>
       <button @click="updateContact(newContact.id)" v-if="edit" type="submit" class="btn btn-primary">Update User</button>
   </div>{{-- /col-md-4 --}}

   <div class="col-md-8">
     <table class="table table-bordered table-hover">
         <thead>
             <tr>
                 <th>CONTACT NAME</th>
                 <th> CONTACT NUMBER </th>
                 <th> ACTION </th>
             </tr>
         </thead>
         <tbody>
             <tr v-for="contact in list">
                 <td> @{{ contact.name }} </td>
                 <td> @{{ contact.number }} </td>
                 <td>
                    <button @click="showContact(contact.id)" type="button" class="btn btn-default">Edit Contact</button>
                    <button  @click="deleteContact(contact.id)" type="button" class="btn btn-danger">Remove Contact</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
</div>{{-- /col-md-8 --}}
</div>{{-- /row --}}


</template>      

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.9.3/vue-resource.js"></script>

<script type="text/javascript" src="/js/main.js"></script>



</body>
</html>
