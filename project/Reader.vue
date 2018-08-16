<template>
    <div class="row">
        <div class="col-12 nopad">
            <div> 
                <div class="g-inner">
                    <div class="vanso a18b60 text-center">Nyheter</div>
                    <table class="table kap table-sm table-striped molo">
                        <tr>
                            <th class="jik"></th>
                            <th class="headline14">DATUM</th>
                            <th class="headline14">TITEL</th>
                            <th class="headline14 text-right">KÄLLA</th>
                            <th class="jik"></th>
                        </tr>
                        <template v-for="item in data">
                            <tr>
                                <td class="jik"></td>
                                <td class="text-left">{{item.createDate}}</td>
                                <td><a :href="item.url" target="_blank">{{item.title}}</a></td>
                                <td class="text-right">{{item.sourcename}}</td>
                                <td class="jik"></td>
                            </tr>
                         </template>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div>
        <div v-for="item in data">
            <span class="x-create">{{item.createDate}}</span>
            <span class="x-title">{{item.title}}</span>
            <span class="x-source">{{item.sourcename}}</span>
        </div>
        <div>{{this.getTitle()}}</div> 
    </div>-->
  
</template>

<script>
    import xml from 'xml-parse'
    import axios from 'axios'


    export default {
        
        props: ['url'],

        data() {
            return {
                data: []
            }
        },
        mounted(){
            if (this.url.length > 10) {
                axios.get(this.url).then( (res) =>{
                    // console.log(res.data)
                    this.data = this.XMLtoObject(res.data)
                })
            }
        },
        created(){
            // this.XMLtoObject()
        },
        computed(){
            // this.XMLtoObject()
        },
        methods: {
            XMLtoObject(xmlString) {
                // console.log(xmlString)
            let string = xmlString
                // remove enter
                string =  string.replace(/\n|\r/g, "")
                // remove white space
                string = string.replace(/>\s+|\s+</g, function(m) {
                    return m.trim()
                })
                // console.log(string)
                let  p = xml.parse(string) 
                // console.log('sdsd',p)
                let b = p[1].childNodes[0].childNodes

                // remove object that not document
                b.splice(0, 3)

                let newA = []
                b.map((i, index) => {

                   i.childNodes.map( (o, on) => {
                        // if (o.type==='element') {
                            newA.push(o.childNodes)
                        // }
                   })
                })

                // console.log(newA)
                let newB = []
                newA.map( (i, index) => {
                    let newob = {}
                    i.map(( o,on) => {

                        if (o.hasOwnProperty('tagName')) {
                            if (o.tagName ==="sourcename") {
                                newob.sourcename = o.innerXML
                            }
                            if (o.tagName ==='title') {
                                newob.title = o.innerXML
                            }
                            if (o.tagName ==='url') {
                                newob.url = o.innerXML
                            }
                            if (o.tagName ==='createDate') {
                                newob.createDate = o.innerXML
                            }
                        }
                    })
                    
                   
                    newB.push(newob)
                })
                // console.log(newB)
                // this.data = newB
                return  newB
               
            },
           
        }
        
    };
</script>
