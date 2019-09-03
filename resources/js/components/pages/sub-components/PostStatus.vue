<template>
	<div class="ui-block">
				
				<!-- News Feed Form  -->
				
				<div class="news-feed-form">
				 
				
				 

					
       
        <b-card   class="mb-2 shadow p-2 mb-2 bg-white rounded">
             <h4 style="text-align: center">Post Challange</h4>
                        
            <b-form @submit="onSubmit">
                
                    <b-form-input 
                    class="mt-2"
                    id="title" 
                    type="text" 
                    v-model="form.title" 
                    required 
                    placeholder="Challenge Title" />
                </b-form-group>

  			
		    <b-form-textarea
		    class="mt-2"
		      id="description"
		      v-model="form.description"
		      placeholder="Enter description..."
		      rows="3"
		      max-rows="6"
		    ></b-form-textarea>

 
  
	<b-form-file
	class="mt-2"
      v-model="form.image"
      :state="Boolean(form.image)"
      placeholder="Upload an Image"
      drop-placeholder="Drop Image here..."
    ></b-form-file>
    

                
    <b-form-group label="Categories"  class="mt-2 checkbox">
      <b-form-checkbox-group
     
        id="checkbox-group-1"
        v-model="form.selectedList"
        :options="optionsList"
        name="flavour-1"
      ></b-form-checkbox-group>
    </b-form-group>

    <b-form-select v-model="form.selectedStatus" :options="statusOptions" class="mt-3">
    	
    </b-form-select>

    <b-form-group label-cols="12" label-cols-lg="2" label-size="sm" label="Active From" label-for="input-sm">	
  <b-row>
    <b-col>  
    	<datepicker name="active_from" v-model="form.active_from"></datepicker>
    </b-col>
  </b-row>
    </b-form-group>

  

        <b-row class="mt-4">
            <b-col class="text-right">
                <b-button type="submit" variant="primary" size="lg" class="btn btn-primary btn-md-2" >Post Challange</b-button>
            </b-col>
        </b-row>
            </b-form>
        </b-card>

    	</div>
    </div>
				</div>
	
			</div>
</template>
<script>
	import Datepicker from 'vuejs-datepicker';
	export default {
		name: 'PostStatus',

		 data() {
            return {
                userLogin: false,
                 form: {
                    title: '',
                    description: '',
                    image: '',
                    selectedList:[],
                    selectedStatus:'Active',
                    activeFrom:'' ,
                },
                show: true,
                optionsList:[],
                statusOptions:[ 
                				{ value: 'Active', text: 'Active' },
                				{ value: 'Inactive', text: 'InActive' },
                			  ],
         		state : { date: new Date(2016, 9,  16)}
            }
        },
         components: {
				  	Datepicker
				  },
		methods: {
			 onSubmit(evt) {
                let loader = this.$loading.show({
                    container: this.fullPage ? null : this.$refs.file,
                });

                // this.showDismissibleAlert = false
                evt.preventDefault();

                var bodyFormData = new FormData();
                bodyFormData.set('title', this.form.title);
                bodyFormData.set('description', this.form.description);
                bodyFormData.set('image', this.form.image);
                bodyFormData.set('categories', this.form.selectedList);
                bodyFormData.set('status', this.form.selectedStatus);
                bodyFormData.set('active_from', this.form.activeFrom);
                this.axios({
                        method: 'post',
                        url: '/challenges/create',
                        data: bodyFormData
                    })
                    .then((response) => {
                        loader.hide();
                        console.log(response.data.success);
                        if (response.data.success==1) {
                            console.log('yep');
                          
                            console.log(response.data.object);
               				this.form = {
						                    title: '',
						                    description: '',
						                    image: '',
						                    selectedList:[],
						                    selectedStatus:'Active',
						                    activeFrom:'' ,
						                };
                            this.$toast.open({
                                message: 'Login was success',
                                type: 'success'
                            });

                        } else {
                            console.log('inelse boy');
                                this.$toast.open({
                                message: 'Invalid Credentials',
                                type: 'error'
                            });
                        }
                    })
                    .catch(function(response) {
                        loader.hide();
                    });
            },
		},
		created() {
            
			this.userLogin = this.$store.getters.getLogin;
			 
			 if(!this.userLogin)
			 	return;
			   let loader = this.$loading.show({
                    container: this.fullPage ? null : this.$refs.file,
                });

                var bodyFormData = new FormData();
                var self = this;
                this.axios({
                        method: 'get',
                        url:  '/categories/getlist',
                        data: bodyFormData
                    })
                    .then((response) => {
                        console.log('category response: '+response.status);
                        loader.hide();
                        // console.log(response);
                        this.optionsList = response.data.object;

                    })
                    .catch(function(response) {
                        loader.hide();
                        // console.log('yep jack');
                        // console.log(this.optionsList);
                        // self.$store.dispatch('destroyAccess');
                        //         this.$toast.open({
                        //         message: 'Please login to continue',
                        //         type: 'success'
                        //     });
                              self.$router.push('/login');
                    });
		},
			
	}
</script>

 