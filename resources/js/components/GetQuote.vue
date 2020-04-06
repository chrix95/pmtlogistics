<template>
    <div class="row form-transparent">
        <div class="col-md-6">
            <select
                v-model="fields.departure"
                class="form-control wow fadeInLeft"
                @change="setDestination(fields.departure)"
            >
                <option value="" selected disabled>Select an option</option>
                <option v-for="(item, index) in departure" :key="index">{{
                    item.depot
                }}</option>
            </select>
        </div>
        <div class="col-md-6">
            <input
                type="number"
                class="form-control wow fadeInRight"
                name="qq-weight"
                v-model="fields.weight"
                placeholder="Weight in kg"
                min="1"
            />
        </div>
        <div class="col-md-6">
            <select
                v-model="fields.destination"
                class="form-control wow fadeInLeft"
            >
                <option value="" selected disabled>Select an option</option>
                <option v-for="(item, index) in destination" :key="index">{{
                    item.depot
                }}</option>
            </select>
        </div>
        <div class="col-md-6">
            <input
                type="number"
                min="1"
                class="form-control wow fadeInRight"
                name="qq-packages"
                v-model="fields.packages"
                placeholder="No. of packages"
            />
        </div>

        <div class="col-md-12 wow fadeInUp">
            <input
                type="submit"
                class="form-control btn btn-custom"
                name="qq-submit"
                value="Get Rate Quote"
                @click.prevent="calculateQuote()"
            />
        </div>

        <div class="col-md-12 wow fadeInUp" v-if="loaded">
            <h4><strong>Estimated Total: </strong>&#8358; {{ total }}</h4>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            departure: [
                {
                    "id": 1,
                    depot: "ABA",
                    manager: "Aba Manager",
                    number: "08055091828",
                    address: "Aba"
                },
                {
                    "id": 2,
                    depot: "ABAKALIKI",
                    manager: "Abakaliki Manager",
                    number: "08055091816",
                    address: "Abakaliki"
                },
                {
                    "id": 3,
                    depot: "ABUJA, MARARABA",
                    manager: "Patience Ozuluigbo",
                    number: "08055091822",
                    address: "By last Bus stop, Keffi Road"
                },
                {
                    "id": 4,
                    depot: "ABUJA,BWARI",
                    manager: "Bwari Manager",
                    number: "08056697034",
                    address: "sahagari Road, Opposite Market"
                },
                {
                    "id": 5,
                    depot: "ABUJA,GWAGWALADA",
                    manager: "Akor james",
                    number: "08055091833",
                    address: "Opposite Brifina Hotel, Gwagwalada, Abuja"
                },
                {
                    "id": 6,
                    depot: "ABUJA,KUBWA",
                    manager: "Kubwa Manager",
                    number: "08055091830",
                    address: "Kubwa"
                },
                {
                    "id": 7,
                    depot: "ABUJA,KUJE",
                    manager: "Nweke Celestine",
                    number: "08055091858",
                    address:
                        "Gwagwalada Road, Near Secretariat Junction, Kuje, Abuja."
                },
                {
                    "id": 9,
                    depot: "ABUJA,UTAKO",
                    manager: "Ugwuaku chinelo",
                    number: "08055091829",
                    address: "39 Ajose Adeogun Street, Utako, Fct, Abuja"
                },
                {
                    "id": 10,
                    depot: "ABUJA,ZUBA",
                    manager: "Okpe Uchenna",
                    number: "08055091831",
                    address: "Zuba"
                },
                {
                    "id": 11,
                    depot: "AFIKPO",
                    manager: "Afikpo Manager",
                    number: "07055792617",
                    address: "Afikpo"
                },
                {
                    "id": 12,
                    depot: "AKURE",
                    manager: "Akure Manager",
                    number: "08056697069",
                    address: "Akure"
                },
                {
                    "id": 13,
                    depot: "BENIN",
                    manager: "Benin Manager",
                    number: "08059041620",
                    address:
                        "No.117, Akpakpava Road by 2nd Junction, Benin City"
                },
                {
                    "id": 14,
                    depot: "CALABAR",
                    manager: "Calabar Manager",
                    number: "08055091834",
                    address: "Calabar"
                },
                {
                    "id": 15,
                    depot: "ENUGU",
                    manager: "Defualt Name",
                    number: "2348012345678",
                    address: "Default Location"
                },
                {
                    "id": 16,
                    depot: "ENUGU,ABAKPA",
                    manager: "Abakpa Manager",
                    number: "08056697088",
                    address: "Abakpa "
                },
                {
                    "id": 17,
                    depot: "ENUGU,GARKI",
                    manager: "Gariki Supervisor",
                    number: "07055794026",
                    address: "Opposite Garki Market, Enugu"
                },
                {
                    "id": 18,
                    depot: "ENUGU-EZIKE",
                    manager: "Enugu-Ezike Manager",
                    number: "08055091832",
                    address: "Enugu-Ezike"
                },
                {
                    "id": 19,
                    depot: "IBADAN",
                    manager: "Ibadan Manager",
                    number: "08055091851",
                    address: "Ibadan"
                },
                {
                    "id": 20,
                    depot: "IKOM",
                    manager: "Ikom Manager",
                    number: "08150461825",
                    address: "Ikom"
                },
                {
                    "id": 21,
                    depot: "ILORIN",
                    manager: "Illorin Manager",
                    number: "08055091849",
                    address: "Illorin"
                },
                {
                    "id": 22,
                    depot: "JOS",
                    manager: "Jos Manager",
                    number: "08055091842",
                    address: ""
                },
                {
                    "id": 23,
                    depot: "KADUNA",
                    manager: "Asogwa Chinedu",
                    number: "09055997741",
                    address: "Kaduna"
                },
                {
                    "id": 24,
                    depot: "LAGOS,AJAH",
                    manager: "Ajah Manager",
                    number: "07055792630",
                    address: "Ajiwe, Opp. Michael & Solomon House, Lagos State"
                },
                {
                    "id": 25,
                    depot: "LAGOS,AJEGUNLE",
                    manager: "Ajegunle Manager",
                    number: "08056697070",
                    address: "No 6 Achakpo Street Ajegunle, lagos"
                },
                {
                    "id": 26,
                    depot: "LAGOS,DEMOROSE",
                    manager: "Okere Christian",
                    number: "2347055792627",
                    address: "106 old ojo road, Agboju, Amuwo odofin Lagos"
                },
                {
                    "id": 27,
                    depot: "LAGOS,EJIGBO",
                    manager: "Ejigbo Manager",
                    number: "2348056697005",
                    address: "106 Egbe Road, By Ilepo Bus stop, Ejigbo"
                },
                {
                    "id": 28,
                    depot: "LAGOS,IBAFO",
                    manager: "Ibafo Manager ",
                    number: "08056697049",
                    address: "Ibafo"
                },
                {
                    "id": 29,
                    depot: "LAGOS,IKORODU",
                    manager: "Ikorodu Manager",
                    number: "08056697002",
                    address: "9 Sagamu Road, Ikorodu"
                },
                {
                    "id": 30,
                    depot: "LAGOS,JIBOWU",
                    manager: "Ikechukwu Asogwa",
                    number: "08150461827",
                    address: "Jibowu"
                },
                {
                    "id": 31,
                    depot: "LAGOS,MAZA-MAZA",
                    manager: "Maza-Maza Manager",
                    number: "07055792627",
                    address: "23 bagegry expressway old ojo road, Mazamza"
                },
                {
                    "id": 32,
                    depot: "LAGOS,OJOTA",
                    manager: "Ojota Manager",
                    number: "2348150461820",
                    address:
                        "Flyover Bridge, Ketu Road, Beside Biode Garage, Ojota"
                },
                {
                    "id": 33,
                    depot: "LAGOS,OJUELEGBA",
                    manager: "Ojuelegba Manager",
                    number: "08055091827",
                    address: "Ojuelegba"
                },
                {
                    "id": 34,
                    depot: "LAGOS,ORILE IGANMU",
                    manager: "Orile Manager",
                    number: "2348055091826",
                    address: "Orile Iganmu"
                },
                {
                    "id": 35,
                    depot: "LAGOS,OSHODI",
                    manager: "Oshodi Manager",
                    number: "2348056697095",
                    address: "Opp Charity Bus Stop Oshodi"
                },
                {
                    "id": 36,
                    depot: "MINNA",
                    manager: "Odo Fimber",
                    number: "08056697027",
                    address:
                        "David Mark Road, Opposite INEC Office, Minna, Niger"
                },
                {
                    "id": 37,
                    depot: "NNEWI",
                    manager: "Nnewi Manager",
                    number: "08056697009",
                    address: "Opposite Kubwa village Market, Kubwa, Abuja"
                },
                {
                    "id": 38,
                    depot: "NSUKKA",
                    manager: "Nsukka Manager",
                    number: "08055091817",
                    address: "Nsukka"
                },
                {
                    "id": 39,
                    depot: "OBOLLO AFOR",
                    manager: "Obollo-Afor Manager",
                    number: "08055091819",
                    address: "Obollo Afor"
                },
                {
                    "id": 40,
                    depot: "ONITSHA",
                    manager: "Onitsha Supervisor",
                    number: "07055792622",
                    address: "Default Location"
                },
                {
                    "id": 41,
                    depot: "OWERRI",
                    manager: "Owerri Manager",
                    number: "08055091824",
                    address: ""
                },
                {
                    "id": 42,
                    depot: "PORTHARCOURT",
                    manager: "PortHarcourt Manager",
                    number: "08055091820",
                    address: "Port Harcourt"
                },
                {
                    "id": 43,
                    depot: "UMUAHIA",
                    manager: "Umuahia Manager",
                    number: "08055091821",
                    address: "Umuahia"
                },
                {
                    "id": 44,
                    depot: "UYO",
                    manager: "Uyo Manager",
                    number: "2348012345678",
                    address: "Uyo"
                },
                {
                    "id": 45,
                    depot: "YENEGOA",
                    manager: "Yenegoa Manager",
                    number: "08055091855",
                    address: "Yenegoa"
                }
            ],
            destination: [],
            fields: {
                departure: '',
                destination: ''
            },
            loaded: false,
            total: ''
        }
    },
    methods: {
        setDestination(val) {
            this.destination = this.departure.filter(item => item.depot !== val)
        },
        calculateQuote() {
            console.log("Calculate")
            var cost = Math.floor(Math.random() * 6000) + 1
            this.total = cost.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
            this.loaded = true
        }
    }
};
</script>
<style scoped></style>
