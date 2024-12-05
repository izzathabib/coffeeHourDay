@extends('layouts.app')
@section('styles')
    <style>        
        .content {
            padding: 20px;
            margin-left: 0;
            transition: margin-left 0.3s ease;
        }
        .card {
            margin-bottom: 20px;
        }
        .admin-status span {cd C:\xampp\htdocs\dasboard_slot\resources\views

        }
        .online {
            color: green;
        }
        .offline {
            color: red;
        }
        .content.active {
            margin-left: 250px;
        }       
    </style>
@endsection

@section('content')
        <div class="row">
        
            <main role="main" class="container my-5">
                <div class="container-left offset-md-1" style="margin-top: 10px;">
                <h2 class="text-center">Dashboard</h2> 
                <div class="card" style="margin-top: 30px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card text-center custom-card-color">
                                    <div class="card-body">
                                        <h4 class="card-title">Number of participants</h4>
                                        <p class="card-text display-4">67</p>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .custom-card-color {
                                    background-color: #f1c17c;
                                }
                            </style>
                            <div class="col-md-4">
                                <div class="card text-center custom-card-color2">
                                    <div class="card-body">
                                        <h4 class="card-title d-flex justify-content-between align-items-center">
                                            <span class="mx-auto">Team assigned</span>
                                            <img src="data:image/png;base64,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" alt="Logo" style="width: 30px; height: 30px;margin-left: -10px;">
                                        </h4>
                                        <p class="d-flex justify-content-start align-items-center">
                                            <span>Technical team:</span>
                                            <span style="margin-left: 192px; font-weight: bold;">3</span>
                                        </p>
                                        <p class="d-flex justify-content-start align-items-center">
                                            <span>Decoration team:</span>
                                            <span style="margin-left: 177px; font-weight: bold;">3</span>
                                        </p>
                                        <p class="d-flex justify-content-start align-items-center">
                                            <span>Content team:</span>
                                            <span style="margin-left: 197px;font-weight: bold;">4</span>
                                        </p>
                                        <p class="d-flex justify-content-start align-items-center">
                                            <span>Safety team:</span>
                                            <span style="margin-left: 211px;font-weight: bold;">4</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .custom-card-color2 {
                                    background-color: #ecf8ec;
                                }
                            </style>
                            <div class="col-md-4">
                                <div class="card text-center custom-card-color3">
                                    <div class="card-body">
                                        <h4 class="card-title">Booked slot</h4>                                       
                                        <div class="row">
                                            <!-- Column 1 -->
                                            <div class="col-6">
                                                <span style="margin-left: -48px;">Time session</span>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <span style="margin-left: -10px;">Booked:</span><span style="font-weight: bold; margin-left: 5px;">7</span>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <span style="margin-left: -10px;">Left:</span><span style="font-weight: bold; margin-left: 5px;">1</span>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <span style="margin-left: -10px;">Total:</span><span style="font-weight: bold; margin-left: 5px;">8</span>
                                                </div>
                                            </div>
                                    
                                            <!-- Column 2 -->
                                            <div class="col-6">
                                                <span style="margin-right: -57px;">Booth place</span>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <span style="margin-left: 45px;">Booked:</span><span style="font-weight: bold; margin-left: 5px;">6</span>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <span style="margin-left: 44px;">Left:</span><span style="font-weight: bold; margin-left: 5px;">2</span>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <span style="margin-left: 44px;">Total:</span><span style="font-weight: bold; margin-left: 5px;">8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                            
                                </div>
                            </div>
                            <style>
                                .custom-card-color3 {
                                    background-color: #c2c0f6;
                                }
                            </style>
                        </div>
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-center fw-bold">Admin</h4>
                                <div class="admin-status">
                                    <div class="row">
                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <span style="margin-left: 225px; display: inline-block;">
                                                <img img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEX///8AAAAbGxsMDAzW1tbS0tKysrJkZGRtbW3a2tqlpaVPT08YGBjIyMjr6+vCwsKIiIh9fX329vZHR0eenp4xMTG8vLzj4+NhYWGQkJBXV1fv7+93d3ehoaEqKiqCgoIkJCQ9PT21tbUwLzCXl5c4ODhTU1OMjIyMxEt0AAAEb0lEQVR4nO3di3aiMBAGYFMFChVtkSpqvfb2/m+4h2XZigKGZOIM9v+eIP/BXJiEOBgAAAAAAAAAAAAAAAD8Mus42gWz7XA43M6CXRRPuBtEauI/qkuBfycp1+lrTbzCNl1zN8+at2qMV/iKuZtoZdr8+E4e5Jy7mcZGnxr5cu8ed1ONJHWjS5Mg4W5ud9MO+XK9+6m+dQyo1CN3kztJ3jsHVGrfo5ljYZAvF3I3XJdnGFCpnsyN5gGVmnI3XodNwF48RdM+WBLfFxPLgEpJn/sP1glfuSO0e7YOqNQLd4g2dqNMSfJoQxJQKe4YzSh+ozmxv9MJUUClFtxRGlwrWOh74o5SLyQLqNSIO0ytjDChyIdI1wtzEnsi1UBakDickgaUOCd2rTxdI68y1aV2qCPjDnSBOKC8nynNmvuUtPX3B3nCJXekM3QrttKMO9IZ8oDSOuLaQUJZO8T0A420oeboIKHPHaoidZDwgztUBe2yu7DjDlXx4iChrA1F6lVpLuAOVXH/Cbtvavct4c5BwjfuUBVLBwmfuUNVRA4SptyhKqhrGDlZdQzKanBJWFXYQUJhm8F7+oTckc7QT4iyFm2DgU+eMOKOdIZ21yInbueCuiMOuQNdoF7VfHMHumB7FuqcwLNRuoe69ey549SgHU2ljaR/kSbkDlOLcutC2qbFP4QJha1JSxuygLJKpSeGVAm5gzSKiQIKPu1NU1SUt4V/giSh0GGmMCIIKPxDNvvxVOw4WrLtiqI7YeHJKuCBu/k6bF4yhH+KUDrce0DzH6q0IzQtzGqL0uqHrUx2akS+9DZbjLsGFFiYuaLbpqms7VBNoc6FCoWtsH0mbbonpWSdfurGf7gab9znfLk4aM2XyTqfZybxm76mWfmiXwU78dKgOn0Ms1T4e6CJhTf3ozTy5564nTMAAAAAAAAAALgfyST04vnR9/3jPPbCyd3UEZNwunkODrXl0kO228zD/kZdx9HL7GpNPzd7i+Ie3T+bm0yX3W+RWC2nsu4YaDLatG9UtMs2svfZRumXRbrS04fMlGvf5tmdy6T9b0K43BLGK+yXYh7lyMWFCoWdgP2phYtvnE99s57RSCL9wwjm3iOuRcHIxUUK9R45fq3HWzy+H9tbn2dwcR/NNTc8PJy4Hl2afN+oQ9JfzabvFt9DubgfogvXJxi962ecXBu7PGOUUC49zWXOuuOcO9p/jqYOypuQba0c5HNxe4kN8hcP+lshbBEPqi7uY7NFenBaUhf8QdgZKaovLpB9gUJ/vyyVL5qALm6bo0LymQ33QrQdwSuVtHnwnP3bP9k39q7YBnRXKaRi+S8K9Nc/0bM7Fn+7cpo5q2+jXVzTTc9mi4OzJKPP5tKszp9J8jAPSH1/lyvmY428l8J65q+K8ifDgvmUKPelosr8/68O3E3XtDdOyF/+1WN+iyQSSoGESCgfEiKhfEiIhPIhIRLKh4RIKB8S/uaEPSl5WxS9t+OHPhjvjRMCAAAAAAAAAAAAAADc0B+xP1M2soRqpwAAAABJRU5ErkJggg==" alt="Logo" style="width: 30px; height: 30px;margin-left: -20px;">
                                                Firdaus:
                                            </span>                                            
                                            <span class="online" style="display: inline-block; margin-left: 15px;">Online</span>
                                        </div>
                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <span style="margin-left: 225px; display: inline-block;">
                                                <img img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEX///8AAAAbGxsMDAzW1tbS0tKysrJkZGRtbW3a2tqlpaVPT08YGBjIyMjr6+vCwsKIiIh9fX329vZHR0eenp4xMTG8vLzj4+NhYWGQkJBXV1fv7+93d3ehoaEqKiqCgoIkJCQ9PT21tbUwLzCXl5c4ODhTU1OMjIyMxEt0AAAEb0lEQVR4nO3di3aiMBAGYFMFChVtkSpqvfb2/m+4h2XZigKGZOIM9v+eIP/BXJiEOBgAAAAAAAAAAAAAAAD8Mus42gWz7XA43M6CXRRPuBtEauI/qkuBfycp1+lrTbzCNl1zN8+at2qMV/iKuZtoZdr8+E4e5Jy7mcZGnxr5cu8ed1ONJHWjS5Mg4W5ud9MO+XK9+6m+dQyo1CN3kztJ3jsHVGrfo5ljYZAvF3I3XJdnGFCpnsyN5gGVmnI3XodNwF48RdM+WBLfFxPLgEpJn/sP1glfuSO0e7YOqNQLd4g2dqNMSfJoQxJQKe4YzSh+ozmxv9MJUUClFtxRGlwrWOh74o5SLyQLqNSIO0ytjDChyIdI1wtzEnsi1UBakDickgaUOCd2rTxdI68y1aV2qCPjDnSBOKC8nynNmvuUtPX3B3nCJXekM3QrttKMO9IZ8oDSOuLaQUJZO8T0A420oeboIKHPHaoidZDwgztUBe2yu7DjDlXx4iChrA1F6lVpLuAOVXH/Cbtvavct4c5BwjfuUBVLBwmfuUNVRA4SptyhKqhrGDlZdQzKanBJWFXYQUJhm8F7+oTckc7QT4iyFm2DgU+eMOKOdIZ21yInbueCuiMOuQNdoF7VfHMHumB7FuqcwLNRuoe69ey549SgHU2ljaR/kSbkDlOLcutC2qbFP4QJha1JSxuygLJKpSeGVAm5gzSKiQIKPu1NU1SUt4V/giSh0GGmMCIIKPxDNvvxVOw4WrLtiqI7YeHJKuCBu/k6bF4yhH+KUDrce0DzH6q0IzQtzGqL0uqHrUx2akS+9DZbjLsGFFiYuaLbpqms7VBNoc6FCoWtsH0mbbonpWSdfurGf7gab9znfLk4aM2XyTqfZybxm76mWfmiXwU78dKgOn0Ms1T4e6CJhTf3ozTy5564nTMAAAAAAAAAALgfyST04vnR9/3jPPbCyd3UEZNwunkODrXl0kO228zD/kZdx9HL7GpNPzd7i+Ie3T+bm0yX3W+RWC2nsu4YaDLatG9UtMs2svfZRumXRbrS04fMlGvf5tmdy6T9b0K43BLGK+yXYh7lyMWFCoWdgP2phYtvnE99s57RSCL9wwjm3iOuRcHIxUUK9R45fq3HWzy+H9tbn2dwcR/NNTc8PJy4Hl2afN+oQ9JfzabvFt9DubgfogvXJxi962ecXBu7PGOUUC49zWXOuuOcO9p/jqYOypuQba0c5HNxe4kN8hcP+lshbBEPqi7uY7NFenBaUhf8QdgZKaovLpB9gUJ/vyyVL5qALm6bo0LymQ33QrQdwSuVtHnwnP3bP9k39q7YBnRXKaRi+S8K9Nc/0bM7Fn+7cpo5q2+jXVzTTc9mi4OzJKPP5tKszp9J8jAPSH1/lyvmY428l8J65q+K8ifDgvmUKPelosr8/68O3E3XtDdOyF/+1WN+iyQSSoGESCgfEiKhfEiIhPIhIRLKh4RIKB8S/uaEPSl5WxS9t+OHPhjvjRMCAAAAAAAAAAAAAADc0B+xP1M2soRqpwAAAABJRU5ErkJggg==" alt="Logo" style="width: 30px; height: 30px;margin-left: -100px;">
                                                Aiman:
                                            </span>  
                                            <span class="offline" style="display: inline-block; margin-left: 1px;">Offline</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <span style="margin-left: 225px; display: inline-block;">
                                                <img img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEX///8AAAAbGxsMDAzW1tbS0tKysrJkZGRtbW3a2tqlpaVPT08YGBjIyMjr6+vCwsKIiIh9fX329vZHR0eenp4xMTG8vLzj4+NhYWGQkJBXV1fv7+93d3ehoaEqKiqCgoIkJCQ9PT21tbUwLzCXl5c4ODhTU1OMjIyMxEt0AAAEb0lEQVR4nO3di3aiMBAGYFMFChVtkSpqvfb2/m+4h2XZigKGZOIM9v+eIP/BXJiEOBgAAAAAAAAAAAAAAAD8Mus42gWz7XA43M6CXRRPuBtEauI/qkuBfycp1+lrTbzCNl1zN8+at2qMV/iKuZtoZdr8+E4e5Jy7mcZGnxr5cu8ed1ONJHWjS5Mg4W5ud9MO+XK9+6m+dQyo1CN3kztJ3jsHVGrfo5ljYZAvF3I3XJdnGFCpnsyN5gGVmnI3XodNwF48RdM+WBLfFxPLgEpJn/sP1glfuSO0e7YOqNQLd4g2dqNMSfJoQxJQKe4YzSh+ozmxv9MJUUClFtxRGlwrWOh74o5SLyQLqNSIO0ytjDChyIdI1wtzEnsi1UBakDickgaUOCd2rTxdI68y1aV2qCPjDnSBOKC8nynNmvuUtPX3B3nCJXekM3QrttKMO9IZ8oDSOuLaQUJZO8T0A420oeboIKHPHaoidZDwgztUBe2yu7DjDlXx4iChrA1F6lVpLuAOVXH/Cbtvavct4c5BwjfuUBVLBwmfuUNVRA4SptyhKqhrGDlZdQzKanBJWFXYQUJhm8F7+oTckc7QT4iyFm2DgU+eMOKOdIZ21yInbueCuiMOuQNdoF7VfHMHumB7FuqcwLNRuoe69ey549SgHU2ljaR/kSbkDlOLcutC2qbFP4QJha1JSxuygLJKpSeGVAm5gzSKiQIKPu1NU1SUt4V/giSh0GGmMCIIKPxDNvvxVOw4WrLtiqI7YeHJKuCBu/k6bF4yhH+KUDrce0DzH6q0IzQtzGqL0uqHrUx2akS+9DZbjLsGFFiYuaLbpqms7VBNoc6FCoWtsH0mbbonpWSdfurGf7gab9znfLk4aM2XyTqfZybxm76mWfmiXwU78dKgOn0Ms1T4e6CJhTf3ozTy5564nTMAAAAAAAAAALgfyST04vnR9/3jPPbCyd3UEZNwunkODrXl0kO228zD/kZdx9HL7GpNPzd7i+Ie3T+bm0yX3W+RWC2nsu4YaDLatG9UtMs2svfZRumXRbrS04fMlGvf5tmdy6T9b0K43BLGK+yXYh7lyMWFCoWdgP2phYtvnE99s57RSCL9wwjm3iOuRcHIxUUK9R45fq3HWzy+H9tbn2dwcR/NNTc8PJy4Hl2afN+oQ9JfzabvFt9DubgfogvXJxi962ecXBu7PGOUUC49zWXOuuOcO9p/jqYOypuQba0c5HNxe4kN8hcP+lshbBEPqi7uY7NFenBaUhf8QdgZKaovLpB9gUJ/vyyVL5qALm6bo0LymQ33QrQdwSuVtHnwnP3bP9k39q7YBnRXKaRi+S8K9Nc/0bM7Fn+7cpo5q2+jXVzTTc9mi4OzJKPP5tKszp9J8jAPSH1/lyvmY428l8J65q+K8ifDgvmUKPelosr8/68O3E3XtDdOyF/+1WN+iyQSSoGESCgfEiKhfEiIhPIhIRLKh4RIKB8S/uaEPSl5WxS9t+OHPhjvjRMCAAAAAAAAAAAAAADc0B+xP1M2soRqpwAAAABJRU5ErkJggg==" alt="Logo" style="width: 30px; height: 30px;margin-left: -20px;">
                                                Izzat:
                                            </span>  
                                            <span class="online" style="display: inline-block; margin-left: 34px;">Online</span>
                                        </div>
                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <span style="margin-left: 223px; display: inline-block;">
                                                <img img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEX///8AAAAbGxsMDAzW1tbS0tKysrJkZGRtbW3a2tqlpaVPT08YGBjIyMjr6+vCwsKIiIh9fX329vZHR0eenp4xMTG8vLzj4+NhYWGQkJBXV1fv7+93d3ehoaEqKiqCgoIkJCQ9PT21tbUwLzCXl5c4ODhTU1OMjIyMxEt0AAAEb0lEQVR4nO3di3aiMBAGYFMFChVtkSpqvfb2/m+4h2XZigKGZOIM9v+eIP/BXJiEOBgAAAAAAAAAAAAAAAD8Mus42gWz7XA43M6CXRRPuBtEauI/qkuBfycp1+lrTbzCNl1zN8+at2qMV/iKuZtoZdr8+E4e5Jy7mcZGnxr5cu8ed1ONJHWjS5Mg4W5ud9MO+XK9+6m+dQyo1CN3kztJ3jsHVGrfo5ljYZAvF3I3XJdnGFCpnsyN5gGVmnI3XodNwF48RdM+WBLfFxPLgEpJn/sP1glfuSO0e7YOqNQLd4g2dqNMSfJoQxJQKe4YzSh+ozmxv9MJUUClFtxRGlwrWOh74o5SLyQLqNSIO0ytjDChyIdI1wtzEnsi1UBakDickgaUOCd2rTxdI68y1aV2qCPjDnSBOKC8nynNmvuUtPX3B3nCJXekM3QrttKMO9IZ8oDSOuLaQUJZO8T0A420oeboIKHPHaoidZDwgztUBe2yu7DjDlXx4iChrA1F6lVpLuAOVXH/Cbtvavct4c5BwjfuUBVLBwmfuUNVRA4SptyhKqhrGDlZdQzKanBJWFXYQUJhm8F7+oTckc7QT4iyFm2DgU+eMOKOdIZ21yInbueCuiMOuQNdoF7VfHMHumB7FuqcwLNRuoe69ey549SgHU2ljaR/kSbkDlOLcutC2qbFP4QJha1JSxuygLJKpSeGVAm5gzSKiQIKPu1NU1SUt4V/giSh0GGmMCIIKPxDNvvxVOw4WrLtiqI7YeHJKuCBu/k6bF4yhH+KUDrce0DzH6q0IzQtzGqL0uqHrUx2akS+9DZbjLsGFFiYuaLbpqms7VBNoc6FCoWtsH0mbbonpWSdfurGf7gab9znfLk4aM2XyTqfZybxm76mWfmiXwU78dKgOn0Ms1T4e6CJhTf3ozTy5564nTMAAAAAAAAAALgfyST04vnR9/3jPPbCyd3UEZNwunkODrXl0kO228zD/kZdx9HL7GpNPzd7i+Ie3T+bm0yX3W+RWC2nsu4YaDLatG9UtMs2svfZRumXRbrS04fMlGvf5tmdy6T9b0K43BLGK+yXYh7lyMWFCoWdgP2phYtvnE99s57RSCL9wwjm3iOuRcHIxUUK9R45fq3HWzy+H9tbn2dwcR/NNTc8PJy4Hl2afN+oQ9JfzabvFt9DubgfogvXJxi962ecXBu7PGOUUC49zWXOuuOcO9p/jqYOypuQba0c5HNxe4kN8hcP+lshbBEPqi7uY7NFenBaUhf8QdgZKaovLpB9gUJ/vyyVL5qALm6bo0LymQ33QrQdwSuVtHnwnP3bP9k39q7YBnRXKaRi+S8K9Nc/0bM7Fn+7cpo5q2+jXVzTTc9mi4OzJKPP5tKszp9J8jAPSH1/lyvmY428l8J65q+K8ifDgvmUKPelosr8/68O3E3XtDdOyF/+1WN+iyQSSoGESCgfEiKhfEiIhPIhIRLKh4RIKB8S/uaEPSl5WxS9t+OHPhjvjRMCAAAAAAAAAAAAAADc0B+xP1M2soRqpwAAAABJRU5ErkJggg==" alt="Logo" style="width: 30px; height: 30px;margin-left: -100px;">
                                                Afizal:
                                            </span>
                                            <span class="online" style="display: inline-block; margin-left: 1px;">Online</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <span style="margin-left: 225px; display: inline-block;">
                                                <img img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEX///8AAAAbGxsMDAzW1tbS0tKysrJkZGRtbW3a2tqlpaVPT08YGBjIyMjr6+vCwsKIiIh9fX329vZHR0eenp4xMTG8vLzj4+NhYWGQkJBXV1fv7+93d3ehoaEqKiqCgoIkJCQ9PT21tbUwLzCXl5c4ODhTU1OMjIyMxEt0AAAEb0lEQVR4nO3di3aiMBAGYFMFChVtkSpqvfb2/m+4h2XZigKGZOIM9v+eIP/BXJiEOBgAAAAAAAAAAAAAAAD8Mus42gWz7XA43M6CXRRPuBtEauI/qkuBfycp1+lrTbzCNl1zN8+at2qMV/iKuZtoZdr8+E4e5Jy7mcZGnxr5cu8ed1ONJHWjS5Mg4W5ud9MO+XK9+6m+dQyo1CN3kztJ3jsHVGrfo5ljYZAvF3I3XJdnGFCpnsyN5gGVmnI3XodNwF48RdM+WBLfFxPLgEpJn/sP1glfuSO0e7YOqNQLd4g2dqNMSfJoQxJQKe4YzSh+ozmxv9MJUUClFtxRGlwrWOh74o5SLyQLqNSIO0ytjDChyIdI1wtzEnsi1UBakDickgaUOCd2rTxdI68y1aV2qCPjDnSBOKC8nynNmvuUtPX3B3nCJXekM3QrttKMO9IZ8oDSOuLaQUJZO8T0A420oeboIKHPHaoidZDwgztUBe2yu7DjDlXx4iChrA1F6lVpLuAOVXH/Cbtvavct4c5BwjfuUBVLBwmfuUNVRA4SptyhKqhrGDlZdQzKanBJWFXYQUJhm8F7+oTckc7QT4iyFm2DgU+eMOKOdIZ21yInbueCuiMOuQNdoF7VfHMHumB7FuqcwLNRuoe69ey549SgHU2ljaR/kSbkDlOLcutC2qbFP4QJha1JSxuygLJKpSeGVAm5gzSKiQIKPu1NU1SUt4V/giSh0GGmMCIIKPxDNvvxVOw4WrLtiqI7YeHJKuCBu/k6bF4yhH+KUDrce0DzH6q0IzQtzGqL0uqHrUx2akS+9DZbjLsGFFiYuaLbpqms7VBNoc6FCoWtsH0mbbonpWSdfurGf7gab9znfLk4aM2XyTqfZybxm76mWfmiXwU78dKgOn0Ms1T4e6CJhTf3ozTy5564nTMAAAAAAAAAALgfyST04vnR9/3jPPbCyd3UEZNwunkODrXl0kO228zD/kZdx9HL7GpNPzd7i+Ie3T+bm0yX3W+RWC2nsu4YaDLatG9UtMs2svfZRumXRbrS04fMlGvf5tmdy6T9b0K43BLGK+yXYh7lyMWFCoWdgP2phYtvnE99s57RSCL9wwjm3iOuRcHIxUUK9R45fq3HWzy+H9tbn2dwcR/NNTc8PJy4Hl2afN+oQ9JfzabvFt9DubgfogvXJxi962ecXBu7PGOUUC49zWXOuuOcO9p/jqYOypuQba0c5HNxe4kN8hcP+lshbBEPqi7uY7NFenBaUhf8QdgZKaovLpB9gUJ/vyyVL5qALm6bo0LymQ33QrQdwSuVtHnwnP3bP9k39q7YBnRXKaRi+S8K9Nc/0bM7Fn+7cpo5q2+jXVzTTc9mi4OzJKPP5tKszp9J8jAPSH1/lyvmY428l8J65q+K8ifDgvmUKPelosr8/68O3E3XtDdOyF/+1WN+iyQSSoGESCgfEiKhfEiIhPIhIRLKh4RIKB8S/uaEPSl5WxS9t+OHPhjvjRMCAAAAAAAAAAAAAADc0B+xP1M2soRqpwAAAABJRU5ErkJggg==" alt="Logo" style="width: 30px; height: 30px;margin-left: -20px;">
                                                Muaz:
                                            </span>  
                                            <span class="offline" style="display: inline-block; margin-left: 28px;">Offline</span>
                                        </div>
                                        <div class="col-6 d-flex align-items-center justify-content-start">
                                            <span style="margin-left: 228px; display: inline-block;">
                                                <img img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEX///8AAAAbGxsMDAzW1tbS0tKysrJkZGRtbW3a2tqlpaVPT08YGBjIyMjr6+vCwsKIiIh9fX329vZHR0eenp4xMTG8vLzj4+NhYWGQkJBXV1fv7+93d3ehoaEqKiqCgoIkJCQ9PT21tbUwLzCXl5c4ODhTU1OMjIyMxEt0AAAEb0lEQVR4nO3di3aiMBAGYFMFChVtkSpqvfb2/m+4h2XZigKGZOIM9v+eIP/BXJiEOBgAAAAAAAAAAAAAAAD8Mus42gWz7XA43M6CXRRPuBtEauI/qkuBfycp1+lrTbzCNl1zN8+at2qMV/iKuZtoZdr8+E4e5Jy7mcZGnxr5cu8ed1ONJHWjS5Mg4W5ud9MO+XK9+6m+dQyo1CN3kztJ3jsHVGrfo5ljYZAvF3I3XJdnGFCpnsyN5gGVmnI3XodNwF48RdM+WBLfFxPLgEpJn/sP1glfuSO0e7YOqNQLd4g2dqNMSfJoQxJQKe4YzSh+ozmxv9MJUUClFtxRGlwrWOh74o5SLyQLqNSIO0ytjDChyIdI1wtzEnsi1UBakDickgaUOCd2rTxdI68y1aV2qCPjDnSBOKC8nynNmvuUtPX3B3nCJXekM3QrttKMO9IZ8oDSOuLaQUJZO8T0A420oeboIKHPHaoidZDwgztUBe2yu7DjDlXx4iChrA1F6lVpLuAOVXH/Cbtvavct4c5BwjfuUBVLBwmfuUNVRA4SptyhKqhrGDlZdQzKanBJWFXYQUJhm8F7+oTckc7QT4iyFm2DgU+eMOKOdIZ21yInbueCuiMOuQNdoF7VfHMHumB7FuqcwLNRuoe69ey549SgHU2ljaR/kSbkDlOLcutC2qbFP4QJha1JSxuygLJKpSeGVAm5gzSKiQIKPu1NU1SUt4V/giSh0GGmMCIIKPxDNvvxVOw4WrLtiqI7YeHJKuCBu/k6bF4yhH+KUDrce0DzH6q0IzQtzGqL0uqHrUx2akS+9DZbjLsGFFiYuaLbpqms7VBNoc6FCoWtsH0mbbonpWSdfurGf7gab9znfLk4aM2XyTqfZybxm76mWfmiXwU78dKgOn0Ms1T4e6CJhTf3ozTy5564nTMAAAAAAAAAALgfyST04vnR9/3jPPbCyd3UEZNwunkODrXl0kO228zD/kZdx9HL7GpNPzd7i+Ie3T+bm0yX3W+RWC2nsu4YaDLatG9UtMs2svfZRumXRbrS04fMlGvf5tmdy6T9b0K43BLGK+yXYh7lyMWFCoWdgP2phYtvnE99s57RSCL9wwjm3iOuRcHIxUUK9R45fq3HWzy+H9tbn2dwcR/NNTc8PJy4Hl2afN+oQ9JfzabvFt9DubgfogvXJxi962ecXBu7PGOUUC49zWXOuuOcO9p/jqYOypuQba0c5HNxe4kN8hcP+lshbBEPqi7uY7NFenBaUhf8QdgZKaovLpB9gUJ/vyyVL5qALm6bo0LymQ33QrQdwSuVtHnwnP3bP9k39q7YBnRXKaRi+S8K9Nc/0bM7Fn+7cpo5q2+jXVzTTc9mi4OzJKPP5tKszp9J8jAPSH1/lyvmY428l8J65q+K8ifDgvmUKPelosr8/68O3E3XtDdOyF/+1WN+iyQSSoGESCgfEiKhfEiIhPIhIRLKh4RIKB8S/uaEPSl5WxS9t+OHPhjvjRMCAAAAAAAAAAAAAADc0B+xP1M2soRqpwAAAABJRU5ErkJggg==" alt="Logo" style="width: 30px; height: 30px;margin-left: -100px;">
                                                Nazrin:
                                            </span>
                                            <span class="offline" style="display: inline-block; margin-left: 1px;">Offline</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
