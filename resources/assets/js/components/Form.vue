<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form>
                    <legend>Crear Notebook</legend>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="" placeholder="Nombre de Notebook"/>

                    </div>
                    <div class="form-group">
                        <label for="">Body</label>
                        <input type="text" class="form-control" id="" placeholder="Body"/>

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
            //console.log('Component mounted.')
        }
    }
</script>
