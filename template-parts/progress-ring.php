<div class="circle"><div class="text"><span class="num"><?php echo $template_args['percentage']; ?></span><span class="perc">%</span></div>
    <div class="circle-container">
        <svg class="gradient-circle" width="160" height="160" viewBox="0 0 160 160" data-percent="<?php echo $template_args['percentage']; ?>">
            <defs>
                <linearGradient id="g1">
                    <stop stop-color="#ecb71e"/>
                    <stop offset=".3" stop-color="#f4d67e"/>
                    <stop offset="1" stop-color="#fff"/>
                </linearGradient>
            </defs>

            <circle class='shape' cx='80' cy='80' r='68' stroke-dashoffset='0' stroke="url(#g1)">
            </circle>
        </svg>
    </div>

    <div class="circle-container unfilled">
        <svg class='gray-circle' width="160" height="160" viewBox="0 0 160 160">
            <circle  cx='80' cy='80' r='68' stroke-dasharray='1000' stroke-dashoffset='0'>
            </circle>
        </svg>
    </div>

</div>