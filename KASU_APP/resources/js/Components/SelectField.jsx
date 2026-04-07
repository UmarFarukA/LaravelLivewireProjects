export default function SelectField({
    label,
    name,
    value = "",
    onChange,
    error = null,
    required = false,
    items,
    valueKey,
    labelKey,
    placeholder,
}) {
    const id = `input-${name}`;

    return (
        <div className="mb-4">
            <label
                htmlFor={id}
                className="block text-sm font-medium text-gray-700"
            >
                {label}
                {required && <span className="text-red-500 ml-1">*</span>}
            </label>

            <select
                value={value}
                onChange={onChange}
                className={`mt-1 block w-full rounded-md border p-2 focus:ring-green-600 focus:border-green-600
                    ${error ? 'border-red-500' : 'border-gray-300'}
                `}
            >
                <option>{placeholder}</option>

                {items.map((item) => (
                    <option key={item[valueKey]} value={item[valueKey]}>
                        {item[labelKey]}
                    </option>
                ))}
            </select>

            {error && (
                <p id={`${id}-error`} className="mt-1 text-sm text-red-600">
                    {error}
                </p>
            )}
        </div>
    );
}
