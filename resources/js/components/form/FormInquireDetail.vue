<template>

    <form @submit.prevent="agregar">

        <div v-if="formshow">
            <div v-show="tap_form_show">
                <div class="row">
                    <div class="col-12">
                        <div class="row mt-5">
                            <div class="col text-center">
                                <h6 class="font-weight-bold">CALIDAD DEL HOTEL</h6>
                                <p class="font-weight-bold">(<span class="text-primary">Opcional:</span> Puede seleccionar más de una categoria de hotel.)</p>
                            </div>
                        </div>

                        <div class="row align-items-center no-gutters">

                            <div class="col">
                                <div class="row mt-2 justify-content-center">
                                    <div class="col-auto">

                                        <el-checkbox-group v-model="checkedCategories" @change="handleCheckedCitiesChange" fill="#00b4e9" text-color="#ffffff">
                                            <el-checkbox-button v-for="(categories, indice) in category" :label="categories.nombre" :key="categories.value" size="medium">
                                                <!--                                    <el-avatar src="https://yovana.s3-us-west-1.amazonaws.com/destinations/1574460035212cusco-machupicchu_1574460039.jpg" class="d-block mx-auto"></el-avatar>-->
                                                {{categories.nombre}}
                                                <span class="d-block small font-weight-bold mt-2 text-dark">{{indice + 2}} estrellas</span>
                                            </el-checkbox-button>
                                        </el-checkbox-group>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center no-gutters">

                            <div class="col px-3">
                                <div class="row mt-4">
                                    <div class="col text-center">
                                        <h6 class="font-weight-bold">NUMERO DE PASAJEROS</h6>
                                    </div>
                                </div>
                                <div class="row mt-2 no-gutters">
                                    <div class="col text-center">
                                        <el-input-number v-model="numeropasajeros" @change="handleChangePasajeros" :min="1" :max="10"></el-input-number>
                                    </div>
                                </div>
                            </div>

<!--                            <div class="col px-3">-->
<!--                                <div class="row mt-4">-->
<!--                                    <div class="col text-center">-->
<!--                                        <h6 class="font-weight-bold">DURACIÓN DE VIAJE</h6>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="row mt-2 no-gutters">-->
<!--                                    <div class="col text-center">-->
<!--                                        <el-input-number v-model="duracion" @change="handleChangeDuracion" :min="1" :max="10"></el-input-number>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>

                    </div>
                    <div class="col">
                        <div class="row mb-3 justify-content-center align-items-center">
                            <!--                            <div class="col-2 col-md-1 text-center rounded bg-secondary">-->
                            <!--                                <div class="py-4 text-white">-->
                            <!--                                    <i class="far fa-user"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <div class="col px-3">
                                <p class="font-weight-bold small"><span class="text-danger">*</span>Nombre Completo</p>
                                <el-input
                                    placeholder="Nombre Completo"
                                    v-model="el_nombre"
                                    clearable>
                                </el-input>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <!--                            <div class="col-2 col-md-1 text-center rounded bg-secondary">-->
                            <!--                                <div class="py-4 text-white">-->
                            <!--                                    <i class="far fa-envelope"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <div class="col px-3">
                                <p class="font-weight-bold small"><span class="text-danger">*</span>Email</p>
                                <el-input
                                    placeholder="Email"
                                    v-model="el_email"
                                    clearable>
                                </el-input>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <!--                            <div class="col-2 col-md-1 text-center rounded bg-secondary">-->
                            <!--                                <div class="py-4 text-white">-->
                            <!--                                    <i class="far fa-calendar"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->

                            <div class="col px-3">
                                <p class="font-weight-bold small">Teléfono</p>
                                <vue-tel-input v-model="el_telefono"></vue-tel-input>
                            </div>

                            <div class="col px-3">
                                <p class="font-weight-bold small">Fecha de Viaje</p>
                                <el-date-picker
                                    v-model="el_fecha"
                                    type="date"
                                    placeholder="Fecha de viaje">
                                </el-date-picker>
                            </div>

                        </div>

                        <!--                        <div class="row mb-3 align-items-center">-->
                        <!--&lt;!&ndash;                            <div class="col-2 col-md-1 text-center rounded bg-secondary">&ndash;&gt;-->
                        <!--&lt;!&ndash;                                <div class="py-4 text-white">&ndash;&gt;-->
                        <!--&lt;!&ndash;                                    <i class="fas fa-phone-alt"></i>&ndash;&gt;-->
                        <!--&lt;!&ndash;                                </div>&ndash;&gt;-->
                        <!--&lt;!&ndash;                            </div>&ndash;&gt;-->
                        <!--                            <div class="col px-3">-->
                        <!--                                <vue-tel-input v-model="el_telefono"></vue-tel-input>-->
                        <!--                            </div>-->
                        <!--                        </div>-->

                        <div class="row mb-3 align-items-center">
                            <!--                            <div class="col-2 col-md-1 text-center rounded bg-secondary">-->
                            <!--                                <div class="py-4 text-white">-->
                            <!--                                    <i class="far fa-edit"></i>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <div class="col px-3">
                                <p class="font-weight-bold  small">¿Alguna Duda?</p>
                                <el-input
                                    type="textarea"
                                    :autosize="{ minRows: 2, maxRows: 4}"
                                    placeholder="¿Tienes alguna duda o pregunta?"
                                    v-model="el_textarea">
                                </el-input>

                            </div>
                        </div>
                    </div>
                </div>


            </div>


<!--            <transition name="fade">-->
<!--                <div v-show="!tap_form_show">-->
<!--                    <div class="container">-->
<!--                        <div class="row mt-5 justify-content-center">-->
<!--                            <div class="col-8">-->
<!--                                <div class="row mb-3 align-items-center">-->
<!--                                    &lt;!&ndash;                            <div class="col-2 col-md-1 text-center rounded bg-secondary">&ndash;&gt;-->
<!--                                    &lt;!&ndash;                                <div class="py-4 text-white">&ndash;&gt;-->
<!--                                    &lt;!&ndash;                                    <i class="far fa-user"></i>&ndash;&gt;-->
<!--                                    &lt;!&ndash;                                </div>&ndash;&gt;-->
<!--                                    &lt;!&ndash;                            </div>&ndash;&gt;-->
<!--                                    <div class="col px-3">-->
<!--                                        <p class="font-weight-bold text-secondary small"><span class="text-danger">*</span>Nombre Completo</p>-->
<!--                                        <el-input-->
<!--                                            placeholder="Nombre Completo"-->
<!--                                            v-model="el_nombre"-->
<!--                                            clearable>-->
<!--                                        </el-input>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <div class="row mb-3 align-items-center">-->
<!--                                    &lt;!&ndash;                            <div class="col-2 col-md-1 text-center rounded bg-secondary">&ndash;&gt;-->
<!--                                    &lt;!&ndash;                                <div class="py-4 text-white">&ndash;&gt;-->
<!--                                    &lt;!&ndash;                                    <i class="far fa-envelope"></i>&ndash;&gt;-->
<!--                                    &lt;!&ndash;                                </div>&ndash;&gt;-->
<!--                                    &lt;!&ndash;                            </div>&ndash;&gt;-->
<!--                                    <div class="col px-3">-->
<!--                                        <p class="font-weight-bold text-secondary small"><span class="text-danger">*</span>Email</p>-->
<!--                                        <el-input-->
<!--                                            placeholder="Email"-->
<!--                                            v-model="el_email"-->
<!--                                            clearable>-->
<!--                                        </el-input>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <div class="row mb-3 align-items-center">-->
<!--                                    &lt;!&ndash;                            <div class="col-2 col-md-1 text-center rounded bg-secondary">&ndash;&gt;-->
<!--                                    &lt;!&ndash;                                <div class="py-4 text-white">&ndash;&gt;-->
<!--                                    &lt;!&ndash;                                    <i class="far fa-calendar"></i>&ndash;&gt;-->
<!--                                    &lt;!&ndash;                                </div>&ndash;&gt;-->
<!--                                    &lt;!&ndash;                            </div>&ndash;&gt;-->

<!--                                    <div class="col px-3">-->
<!--                                        <p class="font-weight-bold text-secondary small">Teléfono</p>-->
<!--                                        <vue-tel-input v-model="el_telefono"></vue-tel-input>-->
<!--                                    </div>-->

<!--                                    <div class="col px-3">-->
<!--                                        <p class="font-weight-bold text-secondary small">Fecha de Viaje</p>-->
<!--                                        <el-date-picker-->
<!--                                            v-model="el_fecha"-->
<!--                                            type="date"-->
<!--                                            placeholder="Fecha de viaje">-->
<!--                                        </el-date-picker>-->
<!--                                    </div>-->

<!--                                </div>-->

<!--                                &lt;!&ndash;                        <div class="row mb-3 align-items-center">&ndash;&gt;-->
<!--                                &lt;!&ndash;&lt;!&ndash;                            <div class="col-2 col-md-1 text-center rounded bg-secondary">&ndash;&gt;&ndash;&gt;-->
<!--                                &lt;!&ndash;&lt;!&ndash;                                <div class="py-4 text-white">&ndash;&gt;&ndash;&gt;-->
<!--                                &lt;!&ndash;&lt;!&ndash;                                    <i class="fas fa-phone-alt"></i>&ndash;&gt;&ndash;&gt;-->
<!--                                &lt;!&ndash;&lt;!&ndash;                                </div>&ndash;&gt;&ndash;&gt;-->
<!--                                &lt;!&ndash;&lt;!&ndash;                            </div>&ndash;&gt;&ndash;&gt;-->
<!--                                &lt;!&ndash;                            <div class="col px-3">&ndash;&gt;-->
<!--                                &lt;!&ndash;                                <vue-tel-input v-model="el_telefono"></vue-tel-input>&ndash;&gt;-->
<!--                                &lt;!&ndash;                            </div>&ndash;&gt;-->
<!--                                &lt;!&ndash;                        </div>&ndash;&gt;-->

<!--                                <div class="row mb-3 align-items-center">-->
<!--                                    &lt;!&ndash;                            <div class="col-2 col-md-1 text-center rounded bg-secondary">&ndash;&gt;-->
<!--                                    &lt;!&ndash;                                <div class="py-4 text-white">&ndash;&gt;-->
<!--                                    &lt;!&ndash;                                    <i class="far fa-edit"></i>&ndash;&gt;-->
<!--                                    &lt;!&ndash;                                </div>&ndash;&gt;-->
<!--                                    &lt;!&ndash;                            </div>&ndash;&gt;-->
<!--                                    <div class="col px-3">-->
<!--                                        <p class="font-weight-bold text-secondary small">¿Alguna Duda?</p>-->
<!--                                        <el-input-->
<!--                                            type="textarea"-->
<!--                                            :autosize="{ minRows: 2, maxRows: 4}"-->
<!--                                            placeholder="¿Tienes alguna duda o pregunta?"-->
<!--                                            v-model="el_textarea">-->
<!--                                        </el-input>-->

<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                </div>-->
<!--            </transition>-->

            <div class="row justify-content-center mt-3">
                <div class="col-4 text-center">
<!--                    <button type="button" class="btn btn-info btn-lg text-white font-weight-bold" v-on:click="tap_form_show = !tap_form_show" v-if="tap_form_show === true">-->
<!--                        Siguiente >>-->
<!--                    </button>-->
<!--                    <button type="button" class="btn btn-secondary btn mx-3 text-white font-weight-normal" v-on:click="tap_form_show = !tap_form_show" v-else>-->
<!--                        < Atrás-->
<!--                    </button>-->
<!--                    <button type="submit" class="btn btn-success btn-lg text-white font-weight-bold" v-if="tap_form_show === false" v-show="btnviewdesign">-->
<!--                        Enviar-->
<!--                    </button>-->
                    <button type="submit" class="btn btn-block btn-success btn-lg text-white font-weight-bold" v-show="btnviewdesign">
                        Enviar
                    </button>
                    <transition name="fade">
                        <button type="submit" class="btn btn-dark btn-lg text-white font-weight-bold" v-show="loadingdesign">
                            <i class="fas fa-circle-notch fa-spin"></i>
                        </button>
                    </transition>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-right">
                <a href="mailto:info@incasperutours.travel" class="btn btn-link font-weight-bold py-2 px-0">info@incasperutours.travel</a>
            </div>
        </div>
        <div class="row mt-4" v-if="!formshow">
            <div class="col">
                <div class="alert alert-success">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <hr>
                        </div>
                        <div class="col text-center">
                            <h4 class="font-weight-bold">Gracias por contactar con nosotros</h4>
                            <p class="font-weight-nomal">Un representante de INCAS PERU se comunicará con usted a la brevedad.</p>
                            <button type="button" class="btn btn-primary" @click="updateComponent">Enviar Nuevo <i data-feather="rotate-ccw" class="text-white" stroke-width="1"></i></button>
                        </div>
                        <div class="col-3">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</template>

<script>


    export default {
        props: ['paquetesId'],
        data() {
            return {
                datos: [],
                category:[
                    {
                        nombre: 'Economico', estrellas: '2', value: '1'
                    },
                    {
                        nombre: 'Normal', estrellas: '3', value: '2'
                    },
                    {
                        nombre: 'Superior', estrellas: '4', value: '3'
                    },
                    {
                        nombre: 'Lujo', estrellas: '5', value: '4'
                    }
                ],

                tap_form_show: true,

                el_nombre:'',
                el_email:'',
                el_fecha:'',
                el_telefono: '',
                el_textarea: '',

                pickerOptions: {
                    disabledDate(time) {
                        return time.getTime() > Date.now();
                    },
                    shortcuts: [{
                        text: 'Today',
                        onClick(picker) {
                            picker.$emit('pick', new Date());
                        }
                    }, {
                        text: 'Yesterday',
                        onClick(picker) {
                            const date = new Date();
                            date.setTime(date.getTime() - 3600 * 1000 * 24);
                            picker.$emit('pick', date);
                        }
                    }, {
                        text: 'A week ago',
                        onClick(picker) {
                            const date = new Date();
                            date.setTime(date.getTime() - 3600 * 1000 * 24 * 7);
                            picker.$emit('pick', date);
                        }
                    }]
                },

                loadingdesign: false,
                btnviewdesign: true,
                formshow: true,


                checkedCategories: [],

                // category: categoryOptions,
                destinations: [],


                numeropasajeros: 1,

                duracion: 1

            }
        },
        created(){
            axios.get('/loaddestinos/destinos').then(res=>{
                this.destinations = res.data;
            })
        },
        methods: {

            handleChangePasajeros(value) {
                // console.log(value);
                console.log(this.numeropasajeros);
            },

            handleChangeDuracion(value) {
                console.log(value)
            },

            handleCheckedCitiesChange(value) {

                console.log(this.checkedCategories);
            },

            handleCheckedDestinationsChange(value) {
                // let checkedCount = value.length;
                // this.checkAll = checkedCount === this.category.length;
                // this.isIndeterminate = checkedCount > 0 && checkedCount < this.category.length;
                console.log(this.checkedDestinations);
            },

            agregar(){
                if(this.el_nombre.trim() === '' || this.el_email.trim() === ''){
                    alert('Por favor complete "Nombre" o "Email"');
                    return;
                }

                let obj = {
                    paquete_id: this.paquetesId,
                    category_d: this.checkedCategories,
                    pasajeros_d: this.numeropasajeros,
                    duracion_d: this.duracion,
                    tap_form_show: this.tap_form_show,

                    el_nombre: this.el_nombre,
                    el_email: this.el_email,
                    el_fecha: this.el_fecha,
                    el_telefono: this.el_telefono,
                    el_textarea: this.el_textarea,
                };
                const self = this;
                this.loadingdesign = true;
                this.btnviewdesign = false;
                this.tap_form_show = false;
                this.formshow = true;
                axios.post('/formulario-detail', obj)
                    .then((res) =>{
                        self.loadingdesign = false;
                        this.btnviewdesign = true;
                        this.tap_form_show = true;
                        this.formshow = false;
                        const datoServidor = res.data;
                        this.datos.push(datoServidor);
                        console.log(datoServidor);
                        // this.$forceUpdate();
                        // console.log(this.categoriasSeleccionadosForm);

                    })
            },
            updateComponent(){
                // this.$forceUpdate();
                this.formshow = true;

                this.el_nombre = '';
                this.el_email = '';
                this.el_fecha = '';
                this.el_telefono = '';
                this.el_textarea = '';
                this.numeropasajeros = 1;
                this.duracion = 1;
                this.checkedCategories = [];

                console.log(this.categoriasSeleccionadosForm);
                // console.log('test');

            }
        }

    }
</script>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
    .vti__input{
        -webkit-appearance: none;
        background-color: #FFF;
        background-image: none;
        border-radius: 0 4px 4px 0 !important;
        /*border: 1px solid #DCDFE6 !important;*/
        box-sizing: border-box;
        color: #606266;
        display: inline-block;
        font-size: inherit;
        height: 40px;
        line-height: 40px;
        outline: 0;
        padding: 0 15px;
        transition: border-color .2s cubic-bezier(.645,.045,.355,1);
        width: 100%;
    }
    .vue-tel-input {
        border-radius: 4px;
        display: flex;
        border: 1px solid #DCDFE6 !important;
        text-align: left;
    }
    .vue-tel-input:focus-within {
        box-shadow: none !important;
        border-color: #66afe9 !important;
    }
</style>
