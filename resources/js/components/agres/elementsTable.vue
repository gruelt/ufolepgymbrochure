<template>

    <div>
        {{filteredelements.length}} éléments
<!--        <span>{{metafilters}}</span>-->
<!--            {{filters}}-->
<!--        {{checkboxes}}-->
<!--        {{rangesmin }}-->
<!--        {{rangesmax }}-->
        <b-table :items="filteredelements" :fields="fields">

            <template slot="top-row" slot-scope="{ fields }">

                <td v-for="field in fields" :key="field.key">

                    <input v-if="field.type=='text'" type=text  :size="field.size" v-model="filters[field.key]" >

                    <input v-if="field.type=='radio'" type=checkbox   v-model="checkboxes[field.key]" >

                    <span v-if="field.type=='between'">
                        min {{rangesmin[field.key]}}<b-form-input id="min-1" v-model="rangesmin[field.key]" type="range" min="0.1" max="0.7" step="0.1"></b-form-input>
                        max {{rangesmax[field.key]}}<b-form-input id="max-1" v-model="rangesmax[field.key]" type="range" min="0.1" max="0.7" step="0.1"></b-form-input>
                    </span>

                </td>
            </template>

            <template #cell(image)="data">
                <a :href="'/elements/'+ data.item.id">
                    <img :src="'https://ufolepbrochure.s3.eu-west-3.amazonaws.com/'+data.value"  width="250" height="160" alt="">
                </a>
            </template>

            <template #cell(action)="data">
                <b-button v-if="role === 'admin'" variant="info" :href="'/agres/'+ agres +'/elements/'+ data.item.id + '/edit'">Editer</b-button>
            </template>




        </b-table>
    </div>

</template>

<script>
export default {
    name: "elements-table",
    props: {
        title: String,
        elements: Array,
        agres: Number,
        role: Boolean
    },
    data() {
        return {
            metafilters:{},

            filters: {
                id: '',
                issuedBy: '',
                issuedTo: ''
            },
            checkboxes: {

            },
            rangesmin:{

            },
            rangesmax:{

            },

            fields: [
                {
                    key: 'num',
                    label: 'Numéro',
                    sortable: true,
                    size: '1',
                    type: 'text'
                },
                {
                    key: 'accro',
                    label: 'Accro',
                    sortable: true,
                    size: '1'

                },
                {
                    key: 'BI',
                    label: 'Barre Inférieure',
                    sortable: true,
                    size: '1',
                    type:'radio'

                },
                {
                    key: 'BS',
                    label: 'Barre Supérieure',
                    sortable: true,
                    size: '1',
                    type:'radio'

                },
                {
                    key: 'difficulte',
                    label: 'Difficulte',
                    sortable: true,
                    size: '1',
                    type: 'between'

                },
                {
                    key: 'nom',
                    label: 'Nom',
                    sortable: true,
                    size: '24',
                    type:'text'
                },
                {
                    key: 'image',
                    label: 'Image',
                    sortable: true
                },
                {
                    key: 'famille.nom',
                    label: 'Famille',
                    sortable: true,
                    size: '2'
                    // Variant applies to the whole column, including the header and footer
                    // thStyle: { backgroundColor: '#FFef44', maxWidth: '10px'},
                },
                {
                    key: 'action',
                    label: 'Actions',

                    // Variant applies to the whole column, including the header and footer
                }

            ],
        }
    },

    computed: {
        filteredelements() {


            const filteredText = this.elements.filter(item => {
                return Object.keys(this.filters).every(key =>
                    String(item[key]).toLowerCase().includes(this.filters[key].toLowerCase())
                )
            })

             const filteredCheckbox = filteredText.filter(item => {
                return Object.keys(this.checkboxes).every(key =>
                    item[key] == this.checkboxes[key]
                )
            })

            const filteredRangesmin = filteredCheckbox.filter(item => {
                return Object.keys(this.rangesmin).every(key =>
                    item[key] >= this.rangesmin[key]
                )
            })

            const filteredRangesmax = filteredRangesmin.filter(item => {
                return Object.keys(this.rangesmax).every(key =>
                    item[key] <= this.rangesmax[key]
                )
            })

            const filtered = filteredRangesmax;

            this.metafilters={
                textfilters : this.filters,
                checkboxes: this.checkboxes,
                ranges: {
                    min: this.rangesmin,
                    max: this.rangesmax
                }
            }

            return filtered.length > 0 ? filtered : [{
                id: '',
                issuedBy: '',
                issuedTo: ''
            }]
        },
    }


}
</script>

<style scoped>

</style>
