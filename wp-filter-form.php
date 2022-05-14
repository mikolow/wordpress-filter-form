<div class="container">
    <div class="row row--filter">
        <form method="GET" class="filter-form" id="filter_form">
            <select class="mySelect" name="tax_categories" id="tax_categories">

                <?php
                $terms = get_terms([
                    'taxonomy'   => 'tax_categories',
                    'hide_empty' => true
                ]);
                ?>

                <option value="<?php echo $terms[0]->slug; ?>" data-id="<?php echo $terms[0]->term_id; ?>">
                    <?php
                    $value = get_field('placeholder_category', 'options');
                    if ($value): ?>
                        <?php echo esc_html($value); ?>
                    <?php endif; ?>
                </option>

                <?php foreach ($terms as $term) : ?>
                    <option data-id="<?php echo $term->term_id; ?>" value="<?php echo $term->slug; ?>" <?php if (isset($_GET['tax_categories']) && $_GET['tax_categories'] === $term->slug) echo "selected"; ?>>
                        <?php echo $term->name; ?>
                    </option>
                <?php endforeach; ?>

            </select>


            <select class="mySelect" name="contract_type" id="contract_type">

                <?php
                $terms = get_terms([
                    'taxonomy'   => 'contract_type',
                    'hide_empty' => true
                ]); ?>

                <option value="<?php echo $terms[0]->slug; ?>" data-id="<?php echo $terms[0]->term_id; ?>">
                    <?php
                    $value = get_field('placeholder_type', 'options');
                    if ($value): ?>
                        <?php echo esc_html($value); ?>
                    <?php endif; ?>
                </option>

                <?php foreach ($terms as $term) : ?>
                    <option data-id="<?php echo $term->term_id; ?>" value="<?php echo $term->slug; ?>" <?php if (isset($_GET['contract_type']) && $_GET['contract_type'] === $term->slug) echo "selected"; ?>>
                        <?php echo $term->name; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <select class="mySelect" name="localization" id="localization">

                <?php
                $terms = get_terms([
                    'taxonomy'   => 'localization',
                    'hide_empty' => true
                ]); ?>

                <option value="<?php echo $terms[0]->slug; ?>" data-id="<?php echo $terms[0]->term_id; ?>">
                    <?php
                    $value = get_field('placeholder_loco', 'options');
                    if ($value): ?>
                        <?php echo esc_html($value); ?>
                    <?php endif; ?>
                </option>

                <?php foreach ($terms as $term) : ?>

                    <option data-id="<?php echo $term->term_id; ?>" value="<?php echo $term->slug; ?>" <?php if (isset($_GET['localization']) && $_GET['localization'] === $term->slug) echo "selected"; ?>>
                        <?php echo $term->name; ?>
                    </option>

                <?php endforeach; ?>
            </select>

            <button type="submit" class="btn2"> <?php
                $value = get_field('acf__cta--text', 'options');
                if ($value): ?>
                    <?php echo esc_html($value); ?>
                <?php endif; ?>
            </button>

        </form>
    </div>
</div>


