<template>
    <div class="container">
        <div class="row pull-right">
                <router-link to="/create">
                        <a class="btn btn-primary">Create Notebook</a>
                </router-link>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div v-if="loading">Loading....</div>
                <div class="panel panel-default" v-for="notebook in notebooks">

                        <div class="panel-heading">{{notebook.name}} </div>
                        <div class="panel-body">
                                {{notebook.body}}
                                -by {{notebook.user.name}}
                        </div>
                        <button type="submit" v-show="showIt(notebook.id)">Ok</button>
                        <button @click.prevent="editForm=false" v-show="showIt(notebook.id)">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        mounted() {
            var self = this;
            this.loading = false;
            axios.get('notebook').then(function(response){
                    return self.notebooks = response.data; // funciona
                    this.loading = true;

            });        
        },
        data() {
            return {
                notebooks:[],
                loading:false,
                editForm:"",
                notebookEditData:{name:'',body:''}

            }
        },
        methods: {
            editIt(notebookId) {
                this.notebooks.forEach((notebook,i) => {
                    if(notebook.id == notebookId) {
                        this.notebookEditData = notebook;
                    }
                });
                return this.editForm=notebookId;
            },
            showIt(notebookId) {
                if(this.editForm == notebookId) {
                    return true;
                }
                return false;
            },
            updateIt(notebookId) {
                axios.put('notebook' + notebookId, this.notebookEditData)
                    .then(response => {
                            console.log(response);
                            this.editForm=false;
                            this.notebookEditData="";
                            this.$router.push('/');
                    })
                    .catch(error => {
                        console.log(error.response);
                    })
            },
            deleteIt(notebookId) {
                let ok = confirm("are you sure?");
                if(ok){
                    axios.delete('notebook' + notebookId).then(response => {
                        console.log(response);
                    });
                }
            }
        }


    }
</script>
