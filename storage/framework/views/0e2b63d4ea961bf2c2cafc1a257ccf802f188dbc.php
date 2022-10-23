






<?php foreach($attributes->onlyProps(['listing']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['listing']); ?>
<?php foreach (array_filter((['listing']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<div class="flex bg-black text-white">
    <a href="/listings/<?php echo e($listing->id); ?>">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="<?php echo e($listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')); ?>"
                            alt=""
                        /></a>

                      


                        <div>                        
                                <div class="text-xl font-bold mb-4"><a href="/listings/<?php echo e($listing->id); ?>"><?php echo e($listing->company); ?></a></div>




                            <h3 class=" text-xl font-bold mb-4">
                                <a href="/listings/<?php echo e($listing->id); ?>"><?php echo e($listing->title); ?></a>
                            </h3>


                            


                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> <a href="/listings/<?php echo e($listing->id); ?>"><?php echo e($listing->location); ?>   </a>                       
                            </div>
                        </div>

    
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /Users/salvadorsalazar/sitesPHP/phpGigs/resources/views/components/listing-card.blade.php ENDPATH**/ ?>