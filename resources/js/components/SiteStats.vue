<template>
    <div class="mb-10">
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">Laracasts Stats</h1>
    
        <ul>
            <li><strong>Total Series: </strong>{{ series }}</li>
            <li><strong>Total Lessons: </strong>{{ lessons }}</li>
        </ul>
    
    
    </div>
</template>

<script>
export default {
    data() {
        return {
            series: 0,
            lessons: 0
        }
    },

    created() {
        axios.get('http://localhost:8000/api/stats')
            .then(response => {
                this.series = response.data.series;
                this.lessons = response.data.lessons;
            });
    }
};
</script>