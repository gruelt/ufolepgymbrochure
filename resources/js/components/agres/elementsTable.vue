<template>

    <div>

        <b-table :items="filteredelements" :fields="fields">

            <template slot="top-row" slot-scope="{ fields }">
                <td v-for="field in fields" :key="field.key">
                    <input  type=text  :size="field.size" v-model="filters[field.key]" >


                </td>
            </template>

            <template #cell(image)="data">
                <a :href="'/elements/'+ data.item.id">
                    <img :src="'https://ufolepbrochure.s3.eu-west-3.amazonaws.com/'+data.value"  width="250" height="160" alt="">
                </a>
            </template>




        </b-table>
    </div>

</template>

<script>
export default {
    name: "elements-table",
    props: {
        title: String,
        elements: Array
    },
    data() {
        return {

            filters: {
                id: '',
                issuedBy: '',
                issuedTo: ''
            },

            fields: [
                {
                    key: 'difficulte',
                    label: 'Difficulte',
                    sortable: true,
                    size: '1'

                },
                {
                    key: 'nom',
                    label: 'Nom',
                    sortable: true,
                    size: '1'
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
            const filtered = this.elements.filter(item => {
                return Object.keys(this.filters).every(key =>
                    String(item[key]).toLowerCase().includes(this.filters[key].toLowerCase()))
            })
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
