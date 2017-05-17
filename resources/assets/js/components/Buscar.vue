<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Buscar</div>
                    <div class="panel-body">
                        <div class="form-group">
                           <label>Codigo<input type="text" class="form-control" placeholder="Search" v-model="codigo" v-on:keyup="search()" /></label>
                           <label>Name<input type="text" class="form-control" placeholder="dato1" v-model="name" /></label>
                           <label>Body<input type="text" class="form-control" placeholder="dato2" v-model="body"/></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        mounted() {
            console.log('Component mounted.');
        },
        data() {
            return {
                    codigo: '',
                    name: '',
                    body: ''
            }
        },
        methods: {
            search() {
                    if (this.codigo !== "")
                    {
                        axios.get('get_notebook/' + this.codigo)
                            .then(response =>{
                                this.name = response.data.name;
                                this.body = response.data.body;
                                //console.log(response.data);
                            })
                            .catch(error=>{
                                console.log(error.response);
                                this.errors = error.response.data;
                            })


                    }
                    else {
                        this.name ="";
                        this.body ="";
                    }
            }
        }

    }
</script>
