<template>
    <div class="search-box-wrapper">
        <div class="search-box-inner-wrap">
            <div class="search-box-inner">
                <div class="search-select-box">
                    <select class="nice-select">
                        <optgroup label="organic food">
                            <option value="volvo">همه</option>
                        </optgroup>
                    </select>
                </div>
                <div class="search-field-wrap">
                    <input type="text" class="search-field" v-model="qry" v-on:keyup="autoComplete" placeholder="جستجو...">
                    <div class="search-btn">
                        <button><i class="icon-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="text-center"  v-if="results.length" style="position: absolute; background: #fff; left: 5%; top:73%; width: 90%;">
                <p v-for="result in results"  @click="productSingle(result)">{{result.title}}{{result.sku}}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                qry:'',
                results:[],
            }
        },
        methods:{
            autoComplete(){
                this.result=[];
                //alert(this.qry);
                axios.post('/autocomplete/fetch',{
                    qry:this.qry
                })
                .then((response)=>{
                    console.log(response);
                    this.results=response.data;
                })
            },
            productSingle: function(result){
               window.location.href='/product/single/'+result.id;
            },
        }
    }
</script>
