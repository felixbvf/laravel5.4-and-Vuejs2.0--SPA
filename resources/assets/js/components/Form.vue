<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form @submit.prevent="addNotebook">
                    <legend>Crear Notebook</legend>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="" placeholder="Nombre de Notebook" v-model="notebookData.name"/>
                    </div>
                    <div class="form-group">
                        <label for="">Body</label>
                        <input type="text" class="form-control" id="" placeholder="Body" v-model="notebookData.body"/>

                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                notebookData:{
                    name:'',
                    body:''
                },
                errors:{

                }
            }
        },
        methods: {
            addNotebook(){
                axios.post('/notebook',this.notebookData)
                    .then(response =>{
                        console.log(response);
                    })
                    .catch(error =>{
                        console.log(error.response);
                        this.errors = error.response.data;
                });
            }
        }
    }
</script>
