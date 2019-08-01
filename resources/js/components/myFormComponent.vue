<template>
  <div class="">
    <h3 class="text-center">My Exam Slip</h3>
    <p class="text-center">Input your BECE No to see your form</p>
    <form v-on:submit.prevent>
  <div class="form-group row">
    <div class="col-sm-12">
      <input type="text" class="form-control" v-model="pin"
      v-on:keyup.enter="getforms()" placeholder="Your BECE No">
    </div>
    <div class="col-sm-12">
      <button type="button"
      class="form-control mt-1
        btn btn-primary"
       name="button"
       @click="getforms()">Submit</button>
    </div>
  </div>
</form>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">BSCE No</th>
          <th scope="col">Center</th>
          <!-- <th scope="col">Sex</th> -->
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="form,key in forms">
          <td class="bizname">{{form.fullname}}</td>
          <td>{{form.basic_cert_no}}</td>
          <td>{{form.choice_of_center}}</td>
          <!-- <td>{{form.sex}}</td> -->
          <td><a type="button" id="show-modal" @click="showModal=true; setVal(form.fullname,
             form.sex,form.address,form.parent,form.lga, form.state,form.last_school,
             form.basic_cert_no,form.subject1,form.subject2,form.subject3,
             form.subject4,form.subject5,form.subject6,form.subject7,form.subject8,
              form.subject9, form.subject10, form.grade1, form.grade2, form.grade3,
              form.grade4,form.grade5, form.grade6,form.grade7, form.grade8,form.grade9,
              form.grade1,form.school_of_choice,form.choice_of_center,form.passport);"
            class="btn btn-primary btn-sm" data-toggle="#editform">View
          </a></td>
          </tr>
      </tbody>
    </table>
    <div v-if="showModal" class="mt-3">
      <div id="FormRequest">
        <h6 class="text-center"></h6>
        <div id="printMe" class="col-md-10 offset-md-1">
          <h1 class="text-center"> My Form</h1>
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-3">
                <img :src="'storage/profile_pics/'+this.passport" alt="image"
                class="img-fluid max-width:50% height:50%">
              </div>
            </div>
            <div class="col-md-12">
              <hr>
              <span class="ml-2 mr-3 dark">
               Name(s) of Applicant in Full:
             </span>
              <span class="col-md-6">
                {{this.fullname}}
              </span>
              <hr>
            </div>
            <div class="col-md-12">
              <span class=" ml-2 mr-3 dark">
               Sex:
             </span>
              <span class="col-md-6">
                {{this.sex}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="ml-2 mr-3 dark">
               Contact Address:
             </span>
              <span class="col-md-7">
                {{this.address}}
              </span>
              <hr>
            </div>
            <div class="col-md-12">
              <span class="ml-2 mr-3 dark">
               Name of Parents:
             </span>
              <span class="col-md-6">
                {{this.parent}}
              </span>
              <hr>
            </div>
            <div class="col-md-12">
              <span class="mr-3 ml-2 dark">
               Local Government Area:
             </span>
              <span class="col-md-6">
                {{this.lga}}
              </span>
              <hr>
            </div>
            <div class="col-md-12">
              <span class="ml-2 mr-3 dark">
              State Of Origin:
             </span>
              <span class="col-md-7">
                {{this.state}}
              </span>
              <hr>
            </div>
            <div class="col-md-12">
              <span class="dark ml-2 mr-3">
               Name of Last Secondary School Attended:
             </span>
              <span class="col-md-7">
                {{this.last_school}}
              </span>
              <hr>
            </div>
            <div class="col-md-12">
              <span class="dark ml-2 mr-3">
               Basic Education Certificate Exam No:
             </span>
              <span class="col-md-7">
                {{this.basic_cert_no}}
              </span>
              <hr>
            </div>
            <div class="col-md-12">
              <h5 class="text-center"></h5>
              <span class="float-left mr-1 ml-3 dark">
               Subject:
             </span>
              <span class="float-left mr-4">
                {{this.sub1}}
              </span>
              <span class="float-left dark">
               Grade:
             </span>
              <span class="float-left ml-1">
                {{this.grade1}}
              </span>

            </div>
            <div class="col-md-12">
              <span class="float-left ml-3 mr-1 dark">
               Subject:
             </span>
              <span class="float-left ml-1 mr-3">
                {{this.sub2}}
              </span>
              <span class="float-left mr-1 dark">
               Grade:
             </span>
              <span class="float-left ">
                {{this.grade2}}
              </span>

            </div>
            <div class="col-md-12">
              <span class="float-left ml-3 mr-1 dark">
               Subject:
             </span>
              <span class="float-left ml-1 mr-3">
                {{this.sub3}}
              </span>
              <span class="float-left mr-1 dark">
               Grade:
             </span>
              <span class="float-left ">
                {{this.grade3}}
              </span>

            </div>
            <div class="col-md-12">
              <span class="float-left ml-3 mr-1 dark">
               Subject:
             </span>
              <span class="float-left ml-1 mr-3">
                {{this.sub4}}
              </span>
              <span class="float-left mr-1 dark">
               Grade:
             </span>
              <span class="float-left ">
                {{this.grade4}}
              </span>

            </div>
            <div class="col-md-12">
              <span class="float-left ml-3 mr-1 dark">
               Subject:
             </span>
              <span class="float-left ml-1 mr-3">
                {{this.sub5}}
              </span>
              <span class="float-left mr-1 dark">
               Grade:
             </span>
              <span class="float-left ">
                {{this.grade5}}
              </span>

            </div>
            <div class="col-md-12">
              <span class="float-left ml-3 mr-1 dark">
               Subject:
             </span>
              <span class="float-left ml-1 mr-3">
                {{this.sub6}}
              </span>
              <span class="float-left mr-1 dark">
               Grade:
             </span>
              <span class="float-left ">
                {{this.grade6}}
              </span>

            </div>
            <div class="col-md-12">
              <span class="float-left ml-3 mr-1 dark">
               Subject:
             </span>
              <span class="float-left ml-1 mr-3">
                {{this.sub7}}
              </span>
              <span class="float-left mr-1 dark">
               Grade:
             </span>
              <span class="float-left ">
                {{this.grade7}}
              </span>

            </div>
            <div class="col-md-12">
              <span class="float-left ml-3 mr-1 dark">
               Subject:
             </span>
              <span class="float-left ml-1 mr-3">
                {{this.sub8}}
              </span>
              <span class="float-left mr-1 dark">
               Grade:
             </span>
              <span class="float-left ">
                {{this.grade8}}
              </span>

            </div>
            <div class="col-md-12">
              <span class="float-left ml-3 mr-1 dark">
               Subject:
             </span>
              <span class="float-left ml-1 mr-3">
                {{this.sub9}}
              </span>
              <span class="float-left mr-1 dark">
               Grade:
             </span>
              <span class="float-left col-md-3">
                {{this.grade9}}
              </span>

            </div>
            <div class="col-md-12">
              <span class="float-left ml-3 mr-1 dark">
               Subject:
             </span>
              <span class="float-left ml-1 mr-3">
                {{this.sub10}}
              </span>
              <span class="float-left mr-1 dark">
               Grade:
             </span>
              <span class="float-left col-md-3">
                {{this.grade10}}
              </span>

            </div>

            <div class="col-md-12">
              <span class="ml-3 mr-1 dark">
               Choice of School:
             </span>
              <span class="ml-1">
                {{this.school_of_choice}}
              </span>
              <hr>
            </div>
            <div class="col-md-12">
              <span class="ml-3 mr-1 dark">
               Choice of Center:
             </span>
              <span class="ml-1">
                {{this.choice_of_center}}
              </span>
            </div>
            <hr>
            <div class="col-md-12">
              <p class="mt-1">Subject for Examination:</p>
              <p class="">  English,Mathematics, and Basic Science/Technology.</p>
              <hr>
            </div>
            <div class="col-md-12">
              <!-- <div class="col"> -->
                <p class="text-center">7th August 2019</p>
              <!-- </div> -->
              <hr>
            </div>
          </div>
        </div>
    <!-- OUTPUT -->
    <button @click="print">Print</button>
      </div>
    </div>
    <div class="col-md-12">
      <div class="col-md-6 offset-md-3">
        <p>Click here if you have not
        registered for the Entrance Examination
     <a href="/admission">Register for Examination</a>  </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      forms:[],
      id:"",
      status:"",
      fullname:"",
      sex:"",
      parent:"",
      address:"",
      lga:"",
      state:"",
      last_school:"",
      basic_cert_no:"",
      sub1:"",
      sub2:"",
      sub3:"",
      sub4:"",
      sub5:"",
      sub6:"",
      sub7:"",
      sub8:"",
      sub9:"",
      sub10:"",
      grade1:"",
      grade2:"",
      grade3:"",
      grade4:"",
      grade5:"",
      grade6:"",
      grade7:"",
      grade8:"",
      grade9:"",
      grade10:"",
      school_of_choice:"",
      choice_of_center:"",
      pin:"",
      user:"",
      passport:"",
      output:null,
      form:{
        fullname:'',
        age:'',
        dept:'',
      },
      showModal:false,
      pin:"",
      pagination:{

      }
    }
  },
  mounted(){

  },
  methods:{
    print() {
      // Pass the element id here
      this.$htmlToPaper('printMe', () => {
        console.log('Printing done or got cancelled!');
      });
    },
    getforms(){
      let pin=this.pin
      let url= `api/myform/${pin}`

      fetch(url).then(response=>response.json())
      .then(response=>{
        this.forms=response
        // console.log("Successfully fetched")
      })
      .catch(err => console.log(err));
    },
      setVal(fullname, sex, address, parent, lga,state, last_school,basic_cert_no,
        sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8,sub9,sub10,grade1,grade2,grade3,grade4, grade5, grade6,grade7,
        grade8,grade9,grade10, school_of_choice,choice_of_center,passport
      ){ console.log(this.passport);
        this.fullname=fullname,
        this.sex=sex,
        this.address=address,
        this.lga=lga,
        this.state=state,
        this.last_school=last_school,
        this.basic_cert_no=basic_cert_no,
        this.sub1=sub1,
        this.sub2=sub2,
        this.sub3=sub3,
        this.sub4=sub4,
        this.sub5=sub5,
        this.sub6=sub6,
        this.sub7=sub7,
        this.sub8=sub8,
        this.sub9=sub9,
        this.sub10=sub10,
        this.grade1=grade1,
        this.grade2=grade2,
        this.grade3=grade3,
        this.grade4=grade4,
        this.grade5=grade5,
        this.grade6=grade6,
        this.grade7=grade7,
        this.grade8=grade8,
        this.grade9=grade9,
        this.grade10=grade10,
        this.school_of_choice=school_of_choice,
        this.choice_of_center=choice_of_center,
        this.passport=passport
      }
  }
}
</script>

<style lang="css" scoped>
.dark{
  font-weight: bold;

}
.remove{
  border:none;
  background-color: inherit;
}

</style>
