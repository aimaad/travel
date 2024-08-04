<!-- themes/GoTrip/Hotel/frontend/blocks/form_add_package.blade.php -->
<div id="package-form">
    <form @submit.prevent="createPackage">
        <div>
            <label for="tour">Select Tour</label>
            <select v-model="selectedTour">
                <option v-for="tour in tours" :key="tour.id" :value="tour.id">@{{ tour.title }}</option>
            </select>
        </div>

        <div>
            <label for="hotels">Select Hotels</label>
            <select v-model="selectedHotels" multiple>
                <option v-for="hotel in hotels" :key="hotel.id" :value="hotel.id">@{{ hotel.title }}</option>
            </select>
        </div>

        <button type="submit">Create Package</button>
    </form>
</div>

<script>
    new Vue({
        el: '#package-form',
        data: {
            tours: [],
            hotels: [],
            selectedTour: null,
            selectedHotels: []
        },
        mounted() {
            this.fetchTours();
            this.fetchHotels();
        },
        methods: {
            fetchTours() {
                axios.get('/api/tours').then(response => {
                    this.tours = response.data;
                });
            },
            fetchHotels() {
                axios.get('/api/hotels').then(response => {
                    this.hotels = response.data;
                });
            },
            createPackage() {
                const payload = {
                    tour_id: this.selectedTour,
                    hotel_ids: this.selectedHotels
                };

                axios.post('/packages', payload).then(response => {
                    alert(response.data.message);
                });
            }
        }
    });
</script>
