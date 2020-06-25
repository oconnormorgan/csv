import Axios from "axios";

export default {
    data() {
        return {
            result: null,
            help: 'Importer votre document',
        };
    },
    methods: {
        onFileChange(file) {
            let reader = new FileReader;
            reader.onload = (event) => { //MAJUSCULE L to l
                this.result = event.target.result;
            }
            reader.readAsText(file);

        },
        upload() {
            Axios.post('/upload', {
                data: this.result
            }).then(({
                data
            }) => {
                console.log(data)
            })
        }
    },
};
