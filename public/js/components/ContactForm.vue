        <template>
        <form  action=""  @submit.prevent="showAlert" role="form">
        <h2> Contact Us </h2><hr/>

        <div class="form-group">
        <label for="">Firstname</label>
        <input v-model="firstname" type="text" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
        <label for="">Lastname</label>
        <input v-model="lastname" type="text" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
        <label for="">Message</label>
        <textarea v-model="message" rows="2" cols="40"></textarea>
        </div>
        <button v-show="firstname&&lastname&&message"  type="submit" class="btn btn-primary">Submit</button>
        </form>
        </template>

        <script>    

       Vue.component ({

            methods : {

                showAlert : function(){
                    alert("Adasds")
                }
            }

        })


        </script>