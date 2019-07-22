<template>
  <div class="container">
    <h3 class="text-center">My Registration Form</h3>
    <p class="text-center">Please input Your Basic Education Certificate Examination Number</p>
    <form v-on:submit.prevent>
  <div class="form-group row">
    <label for="PinCode" class="col-sm-2 col-form-label">BECE NO</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" v-model="pin"
      v-on:keyup.enter="getforms()" placeholder="Your BECE No">
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
                <img :src="'storage/profile_pics/'+this.passport" alt="image">
              </div>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Name(s) of Applicant in Full:
             </span>
              <span class="col-md-7">
                {{this.fullname}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Sex:
             </span>
              <span class="col-md-7">
                {{this.sex}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Contact Address:
             </span>
              <span class="col-md-7">
                {{this.address}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Name of Parents:
             </span>
              <span class="col-md-7">
                {{this.parent}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Local Government Area:
             </span>
              <span class="col-md-7">
                {{this.lga}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
              State Of Origin:
             </span>
              <span class="col-md-7">
                {{this.state}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Name of Last Secondary School Attended:
             </span>
              <span class="col-md-7">
                {{this.last_school}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Basic Education Certificate Exam No:
             </span>
              <span class="col-md-7">
                {{this.basic_cert_no}}
              </span>
            </div>
            <div class="col-md-12">
              <h5 class="text-center"></h5>
              <span class="col-md-5">
               Subject 1:
             </span>
              <span class="col-md-7">
                {{this.sub1}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Grade 1:
             </span>
              <span class="col-md-7">
                {{this.grade1}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Subject 2:
             </span>
              <span class="col-md-7">
                {{this.sub2}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Grade 2:
             </span>
              <span class="col-md-7">
                {{this.grade2}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Subject 3:
             </span>
              <span class="col-md-7">
                {{this.sub3}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Grade 3:
             </span>
              <span class="col-md-7">
                {{this.grade3}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Subject 4:
             </span>
              <span class="col-md-7">
                {{this.sub4}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Grade 4:
             </span>
              <span class="col-md-7">
                {{this.grade4}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Subject 5:
             </span>
              <span class="col-md-7">
                {{this.sub5}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Grade 5:
             </span>
              <span class="col-md-7">
                {{this.grade5}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Subject 6:
             </span>
              <span class="col-md-7">
                {{this.sub6}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Grade 6:
             </span>
              <span class="col-md-7">
                {{this.grade6}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Subject 7:
             </span>
              <span class="col-md-7">
                {{this.sub7}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Grade 7:
             </span>
              <span class="col-md-7">
                {{this.grade7}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Subject 8:
             </span>
              <span class="col-md-7">
                {{this.sub8}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Grade 8:
             </span>
              <span class="col-md-7">
                {{this.grade8}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Subject 9:
             </span>
              <span class="col-md-7">
                {{this.sub9}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Grade 9:
             </span>
              <span class="col-md-7">
                {{this.grade9}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Subject 10:
             </span>
              <span class="col-md-7">
                {{this.sub10}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Grade 10:
             </span>
              <span class="col-md-7">
                {{this.grade10}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Choice of School:
             </span>
              <span class="col-md-7">
                {{this.school_of_choice}}
              </span>
            </div>
            <div class="col-md-12">
              <span class="col-md-5">
               Choice of Center:
             </span>
              <span class="col-md-7">
                {{this.choice_of_center}}
              </span>
            </div>
            <div class="col-md-12">
              <p class="mt-1">Subject for Examination:</p>
              <p class="">  English,Mathematics, and Basic Science/Technology.</p>
            </div>
            <div class="col-md-12">
              <!-- <div class="col"> -->
                <p>7th August 2019</p>
              <!-- </div> -->
            </div>
          </div>
        </div>
    <!-- OUTPUT -->
    <button @click="print">Print</button>
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
