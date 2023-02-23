<template>
<div class="row">
    <div class="col-md-8">
        <div class="card p-4">
            <h1>{{ title }}</h1>
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <button @click="createTask" type="submit" class="btn btn-primary">Add Task</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="taskModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="taskModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</template>
<script>
    export default {
        data(){
            return{
                title: 'All Task'
            }
        },
        methods:{
            createTask(){
                $('#exampleModal').modal('show')
            }
        }
    }
</script>
<style>

</style>
