<template>
   <div class="container">
       <div>
        <a-scene embedded arjs='sourceType: webcam; detectionMode: mono; maxDetectionRate: 30; canvasWidth: 240; canvasHeight: 180'>
                <a-marker markerhandler preset="hiro"  emitevents="true" cursor="rayOrigin: mouse" id="area">
                    <a-sphere id="globo" src="https://raw.githubusercontent.com/aframevr/sample-assets/master/assets/images/space/earth_atmos_4096.jpg" 
                    radius="0.5" position="0 0.8 0" segments-height="53">
                    <a-animation attribute="scale"
                        dur="1000"
                        from= "1 1 1"
                        to="2 2 2"
                        direction='alternate-reverse'
                        easing= "ease-in-out-circ"     
                        repeat="indefinite">
                    </a-animation>
                </a-sphere>
            </a-marker>
        <a-entity camera></a-entity>
        </a-scene>
        </div>
    <transition name="fade">
                <router-view></router-view>
    </transition>
   </div>
</template>

<style scoped>
    
</style>

<script>
export default {
        name: 'home',
        data() {
            return {
                input: {

                }
            }
        },
        methods: {
           
            
        }
    }
</script>