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
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="taskModalLabel">Add Task</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <label for="title">Title</label>
           <input type="text" class="form-control" v-model="taskData.title">
           <span class="text-danger" v-show="taskErrors.title">Title is Required Title</span>

           <label for="date">Date</label>
           <input type="date" class="form-control" v-model="taskData.date">
           <span class="text-danger" v-show="taskErrors.date">Title is Required Date</span>

           <label for="time">Time</label>
           <input type="time" class="form-control" v-model="taskData.time">
           <span class="text-danger" v-show="taskErrors.time">Title is Required Time</span>
           <label for="detail">Details</label>
           <input type="text" class="form-control" v-model="taskData.detail">
           <span class="text-danger" v-show="taskErrors.detail">Title is Required Details</span>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" @click="storeTask" class="btn btn-primary">Create Task</button>
        </div>
        </div>
    </div>
    </div>
</template>
<script>
    export default {
        data(){
            return{
                title: 'All Task',
                taskData:{
                    title:'',
                    date:'',
                    time:'',
                    detail:'',
                },
                taskErrors:{
                    title:false,
                    date:false,
                    time:false,
                    detail:false,
                }
            }
        },
        methods:{
            createTask(){
                $('#exampleModal').modal('show')
            },
            storeTask(){
                this.taskData.title == '' ? this.taskErrors.title = true : this.taskErrors.title = false
                this.taskData.date == '' ? this.taskErrors.date = true : this.taskErrors.date = false
                this.taskData.time == '' ? this.taskErrors.time = true : this.taskErrors.time = false
                this.taskData.detail == '' ? this.taskErrors.detail = true : this.taskErrors.detail = false
                
                if(this.taskData.title && this.taskData.date &&  this.taskData.time) {
                   
                    axios.post('api/storeTask', this.taskData).then(response => {
                        console.log(response);
                    }).catch(errors => {
                        console.log(errors);
                    });
                }
            }
        }
    }
</script>
<style>

</style>
