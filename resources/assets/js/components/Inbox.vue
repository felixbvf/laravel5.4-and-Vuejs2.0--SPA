<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bandeja de Pendientes</div>
                    <div class="panel-body">
                        Bandeja de Pendientes!!!
                        <ul v-if="notebooks != null">
                            <li v-for="notebook in notebooks">
                                <strong> {{notebook.user.email}} - {{notebook.id}} - {{notebook.name}} - {{notebook.body}}</strong>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        //el: '#list',
        mounted() {
            /*var self = this;
            axios.get('/notebook').then(function(response){
                    return self.notebooks = response.data; // funciona
                    //console.log(response.data);
            });*/
            axios.get('notebook').then((response) => this.notebooks = response.data);
        },
        data() {
            return {
                notebooks:[]
            }
        }



    }
</script>
